<?php

namespace App\Controllers;

use App\Models\BoardsModel;

class Boards extends BaseController
{
    public function getIndex()
    {
        $model = new BoardsModel();
        $data = [
            'boards' => $model->getData(),
        ];

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/boards_list', $data)
            . view('templates/footer');
    }

    public function getCreate()
    {
        return view('templates/head')
            . view('templates/navbar')
            . view('pages/boards_create')
            . view('templates/footer');
    }

    // Fallback: GET /boards/submit -> zeige das Create-Formular (vermeidet MethodNotAllowed bei direktem Aufruf)
    public function getSubmit()
    {
        return $this->getCreate();
    }

    public function postSubmit()
    {
        $model = new BoardsModel();

        $rules = [
            'name' => 'required|max_length[100]'
        ];

        if (! $this->validate($rules)) {
            // Collect validation errors and redirect explicitly to the create form on the production URL
            $errs = $this->validator ? $this->validator->getErrors() : ['Validierung fehlgeschlagen'];
            session()->setFlashdata('errors', $errs);
            header('Location: https://team03.wi1cm.uni-trier.de/public/boards/create');
            exit;
        }

        // Die Datenbank enthält nur 'id' und 'name' — wir speichern nur 'name'.
        $data = [
            'name' => $this->request->getPost('name')
        ];

        try {
            $model->insert($data);
            session()->setFlashdata('success', 'Board wurde angelegt.');
        } catch (\Exception $e) {
            // Log the exception and show an error to the user
            log_message('error', 'Boards::postSubmit insert failed: ' . $e->getMessage());
            session()->setFlashdata('errors', ['Fehler beim Anlegen des Boards: ' . $e->getMessage()]);
            header('Location: https://team03.wi1cm.uni-trier.de/public/boards/create');
            exit;
        }

        // Stabile Redirect-Variante: setze Location-Header direkt, damit keine falsche index.php-Url verwendet wird
        header('Location: https://team03.wi1cm.uni-trier.de/public/boards');
        exit;
    }

    // Editieren: GET-Form mit vorhandenen Daten
    public function getEdit($id)
    {
        $model = new BoardsModel();
        $board = $model->find($id);

        if (!$board) {
            header('Location: https://team03.wi1cm.uni-trier.de/public/boards');
            exit;
        }

        $data = ['board' => $board];

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/boards_create', $data)
            . view('templates/footer');
    }

    // Editieren: POST -> Update
    public function postEdit($id)
    {
        $model = new BoardsModel();

        $rules = [
            'name' => 'required|max_length[100]'
        ];

        if (! $this->validate($rules)) {
            $errs = $this->validator ? $this->validator->getErrors() : ['Validierung fehlgeschlagen'];
            session()->setFlashdata('errors', $errs);
            header('Location: https://team03.wi1cm.uni-trier.de/public/boards/edit/' . rawurlencode($id));
            exit;
        }

        // Beim Update ebenfalls nur 'name' berücksichtigen.
        $data = [
            'name' => $this->request->getPost('name')
        ];

        try {
            $model->update($id, $data);
            session()->setFlashdata('success', 'Board wurde aktualisiert.');
        } catch (\Exception $e) {
            log_message('error', 'Boards::postEdit update failed: ' . $e->getMessage());
            session()->setFlashdata('errors', ['Fehler beim Aktualisieren des Boards: ' . $e->getMessage()]);
            header('Location: https://team03.wi1cm.uni-trier.de/public/boards/edit/' . rawurlencode($id));
            exit;
        }

        header('Location: https://team03.wi1cm.uni-trier.de/public/boards');
        exit;
    }

    public function getDelete($id)
    {
        $model = new BoardsModel();
        try {
            $model->delete($id);
            session()->setFlashdata('success', 'Board wurde gelöscht.');
        } catch (\Exception $e) {
            log_message('error', 'Boards::getDelete failed: ' . $e->getMessage());
            session()->setFlashdata('errors', ['Fehler beim Löschen des Boards: ' . $e->getMessage()]);
        }
        header('Location: https://team03.wi1cm.uni-trier.de/public/boards');
        exit;
    }

    // Dispatcher methods so that URLs like /boards/submit and /boards/edit/{id} work with AutoRouting
    public function submit()
    {
        if ($this->request->getMethod() === 'post') {
            return $this->postSubmit();
        }
        return $this->getSubmit();
    }

    public function edit($id)
    {
        if ($this->request->getMethod() === 'post') {
            return $this->postEdit($id);
        }
        return $this->getEdit($id);
    }

    public function delete($id)
    {
        // map /boards/delete/{id} to getDelete
        return $this->getDelete($id);
    }
}
