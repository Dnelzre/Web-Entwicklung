<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;

class Task extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $tasks_view = $model->getTasksAlphabetically();

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/tasks_view', [
                'tasks_view' => $tasks_view
            ])
            . view('templates/footer');
    }
}
