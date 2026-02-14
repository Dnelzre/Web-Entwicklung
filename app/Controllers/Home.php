<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/head');
        echo view('templates/navbar');
        echo view('templates/footer');
        return view('Startseite.php');
    }

    public function getSpalten()
    {
        echo view('templates/head');
        echo view('templates/navbar');
        echo view('templates/footer');
        return view('Startseite_Spalten');
    }

    public function getFormular()
    {
        echo view('templates/head');
        echo view('templates/navbar');
        echo view('templates/footer');
        return view('startseite_formular');
    }

    public function getDashboard()
    {
        $personenModel = new \App\Models\PersonenModel();
        $taskModel     = new \App\Models\TaskModel();
        $boardsModel   = new \App\Models\BoardsModel();

        $data = [
            'personenCount' => $personenModel->countAll(),
            'taskCount'     => $taskModel->countAll(),
            'boardCount'    => $boardsModel->countAll(),
        ];

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/dashboard', $data)
            . view('templates/footer');
    }
}