<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Task extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        // Daten aus dem Model holen
        $data['tasks'] = $model->getTasksAlphabetically();
        $data['title'] = "Meine Task-Liste";


// Rückgabe der verketteten Views
        // Wir übergeben $data an jede View, damit überall auf $title oder $tasks zugegriffen werden kann
        return view('templates/head', $data)
            . view('templates/navbar', $data)
            . view('pages/tasks_view', $data)
            . view('templates/footer', $data);
    }
}