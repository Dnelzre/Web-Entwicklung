<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TasksModel();
        $personen = $model->getData();

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/personen', [
                'personen' => $personen
            ])
            . view('templates/footer');
    }
}
