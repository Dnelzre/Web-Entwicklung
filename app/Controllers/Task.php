<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        // Daten aus dem Model holen
        $data['tasks'] = $model->getTasksAlphabetically();
        $data['title'] = "Meine Task-Liste";

        // Laden der Views gemäß Aufgabenstellung
        echo view('templates/header', $data);
        echo view('templates/menue');
        echo view('tasks_view', $data); // Die Body View erhält die Tasks
        echo view('templates/footer');
    }
}