<?php

namespace App\Controllers;

use App\Models\SpaltenModel;

class Spalten extends BaseController
{
    // URL: https://team03.wi1cm.uni-trier.de/public/spalten
    // Auto-Routing sucht bei einem GET-Aufruf nach getIndex() oder index()
    public function getIndex()
    {
        $model = new SpaltenModel();

        $data = [
            'spalten' => $model->getData(),
            'title'   => 'Spalten Verwaltung'
        ];

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/spalten', $data)
            . view('templates/footer');
    }

    // URL: https://team03.wi1cm.uni-trier.de/public/spalten/submit (als POST)
    // Oder mit ID: https://team03.wi1cm.uni-trier.de/public/spalten/submit/1
    public function postSubmit($id = null)
    {
        $model = new SpaltenModel();

        $rules = [
            'spalte'              => 'required',
            'spaltenbeschreibung' => 'required',
            'sortid'              => 'required|integer'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $saveData = [
            'spalte'              => $this->request->getPost('spalte'),
            'spaltenbeschreibung' => $this->request->getPost('spaltenbeschreibung'),
            'sortid'              => $this->request->getPost('sortid'),
            'boardsid'            => $this->request->getPost('boardsid') ?? 1
        ];

        if ($id) {
            $model->update($id, $saveData);
        } else {
            $model->insert($saveData);
        }

        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/spalten');
    }

    // URL: https://team03.wi1cm.uni-trier.de/public/spalten/delete/ID
    public function getDelete($id)
    {
        $model = new SpaltenModel();
        $model->delete($id);
        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/spalten');
    }
    public function getEdit($id)
    {
        $model = new SpaltenModel();
        $spalte = $model->find($id);

        if (!$spalte) {
            return redirect()->to('https://team03.wi1cm.uni-trier.de/public/spalten');

        }

        $data = [
            'spalte' => $spalte,
            'title'  => 'Spalte bearbeiten',
            'formAction' => 'https://team03.wi1cm.uni-trier.de/public/spalten/submit/' . $id

        ];

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/spalten_edit', $data)
            . view('templates/footer');
    }
}