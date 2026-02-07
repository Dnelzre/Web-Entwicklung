<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonenModel;

class Personen extends BaseController
{
    public function index()
    {
        $model = new PersonenModel();
        $search = $this->request->getGet('search');

        if (!empty($search)) {
            $personen = $model
                ->like('vorname', $search)
                ->orLike('name', $search)
                ->findAll();
        } else {
            $personen = $model->getData();
        }

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/personen', [
                'personen' => $personen
            ])
            . view('templates/footer');
    }
}