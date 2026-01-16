<?php

namespace App\Controllers;

use App\Models\SpaltenModel;

class Spalten extends BaseController
{
    public function getindex()
    {
        $model = new SpaltenModel();
        $spalten = $model->getData();

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/spalten', [
                'spalten' => $spalten
            ])
            . view('templates/footer');
    }

    public function getErstellen()
    {
        // Formular anzeigen für Erstellung
        $data = [
            'spalte' => [],
            'formAction' => 'https://team03.wi1cm.uni-trier.de/public/spalten/postSubmit'
        ];

        echo view('templates/head');
        echo view('templates/navbar');
        echo view('pages/_spalten_form', $data);
        return view('templates/footer');
    }

    public function postSubmit()
    {
        $spaltenModel = new SpaltenModel();

        $rules = [
            'spalte' => 'required|max_length[255]',
            'sortid' => 'required|integer'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Bestimme next ID (Lücken füllen wie in Tasks)
        $db = \Config\Database::connect();
        $query = $db->query('SELECT id FROM spalten ORDER BY id ASC');
        $rows = $query->getResultArray();

        $nextId = 1;
        foreach ($rows as $r) {
            $existing = (int) $r['id'];
            if ($existing === $nextId) {
                $nextId++;
            } elseif ($existing > $nextId) {
                break;
            }
        }

        $data = [
            'id' => $nextId,
            'spalte' => $this->request->getPost('spalte'),
            'spaltenbeschreibung' => $this->request->getPost('spaltenbeschreibung'),
            'sortid' => $this->request->getPost('sortid') ?? 100,
            'boardsid' => $this->request->getPost('boardsid') ?? 1
        ];

        $spaltenModel->insert($data);

        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/spalten');
    }

    public function getEdit($id)
    {
        $spaltenModel = new SpaltenModel();
        $spalte = $spaltenModel->find($id);

        $data = [
            'spalte' => $spalte,
            'formAction' => 'https://team03.wi1cm.uni-trier.de/public/spalten/postEdit/' . $id
        ];

        echo view('templates/head');
        echo view('templates/navbar');
        echo view('pages/_spalten_form', $data);
        return view('templates/footer');
    }

    public function postEdit($id)
    {
        $spaltenModel = new SpaltenModel();

        $rules = [
            'spalte' => 'required|max_length[255]',
            'sortid' => 'required|integer'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'spalte' => $this->request->getPost('spalte'),
            'spaltenbeschreibung' => $this->request->getPost('spaltenbeschreibung'),
            'sortid' => $this->request->getPost('sortid') ?? 100,
            'boardsid' => $this->request->getPost('boardsid') ?? 1
        ];

        $spaltenModel->update($id, $data);

        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/spalten');
    }

    public function getDelete($id)
    {
        $spaltenModel = new SpaltenModel();
        $spaltenModel->delete($id);

        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/spalten');
    }
}

