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

    public function index_edit() {
        $data['title'] = "Bearbeiten";
        $data['tasks'] = $this->TasksModel->gettasks();

        echo view( 'templates/header');
        echo view('pages/personen', $data);
        echo view( 'templates/footer');

    }

//    public function index()
//    {
//        //Model einbinden
//        $model = new TasksModel();
//
//        //Daten aus Datenbank
//        $personen = $model->getData();
//
//        $data = [
//            'personen' => $personen,
//            'title' => 'Personen Übersicht'
//        ];
//
//        // Views laden und ausgeben
//        echo view('templates/header', $data);
//        echo view('templates/menu');
//        echo view('pages/personen', $data);
//        echo view('templates/footer');
//    }
}