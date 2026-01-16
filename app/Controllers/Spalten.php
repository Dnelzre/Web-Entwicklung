<?php

namespace App\Controllers;

use App\Models\PersonenModel;
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
        echo view("templates/head");
        echo view("templates/navbar");
        echo view("templates/footer");
        return view("erstellen");
    }
}