<?php

namespace App\Controllers;

use App\Models\TasksModel;
class Tasks extends BaseController
{
    //
    public function __construct()
    {
        $this -> TasksModel = new TasksModel();
    }

    public function index()
    {
        $model = new TasksModel();

        $data['personen'] = $model->getData();

        // Views laden und ausgeben
        echo view('templates/header');
        echo view('templates/menu');
        echo view('pages/personen', $data);
        echo view('templates/footer');
    }
}