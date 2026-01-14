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


        return view('templates/head')
            . view('templates/navbar')
            . view('pages/tasks_view', [
                'tasks_view' => $data['tasks'],
            ])
            . view('templates/footer');
    }
}