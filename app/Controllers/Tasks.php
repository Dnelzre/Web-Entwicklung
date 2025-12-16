<?php

namespace App\Controllers;

use App\Models\TasksModel;
class Tasks extends BaseController
{
    public function index()
    {
        //Model einbinden
        $model = new TasksModel();

        //Daten aus Datenbank
        $personen = $model->getData();

        $data = [
            'personen' => $personen,
            'title' => 'Personen Übersicht'
        ];

        // Views laden und ausgeben
        echo view('templates/header', $data);
        echo view('templates/menu');
        echo view('pages/personen', $data);
        echo view('templates/footer');
    }
}