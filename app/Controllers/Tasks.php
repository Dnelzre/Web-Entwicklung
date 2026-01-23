<?php

namespace App\Controllers;

use App\Models\PersonenModel;
use App\Models\TaskModel;
use App\Models\TaskartenModel;
use App\Models\SpaltenModel;
use App\Models\BoardsModel;

class Tasks extends BaseController
{
    public function getindex()
    {
        $taskModel = new TaskModel();

        // Optionaler Board-Filter (GET param 'board')
        $selectedBoard = $this->request->getGet('board');

        $tasks = $taskModel->getTasksWithDetails();

        $spaltenModel = new SpaltenModel();
        $taskartenModel = new TaskartenModel();
        $boardsModel = new BoardsModel();

        $data = [
            'tasks' => $tasks,
            'spalten' => $spaltenModel->getData($selectedBoard),
            'taskarten' => $taskartenModel->getData(),
            'boards' => $boardsModel->getData(),
            'selectedBoard' => $selectedBoard,
            // Use the hosted base URL without web/index.php
            'base_url' => 'https://team03.wi1cm.uni-trier.de/public'
        ];
        return view('templates/head')
            . view('templates/navbar')
            . view('pages/tasks_liste', $data)
            . view('templates/footer');
    }

    public function getCreate()
    {
        $taskartenModel = new TaskartenModel();
        $personenModel = new PersonenModel();
        $spaltenModel = new SpaltenModel();

        $data = [
            'taskarten' => $taskartenModel->getData(),
            'personen' => $personenModel->getData(),
            'spalten' => $spaltenModel->getData(),
            'base_url' => 'https://team03.wi1cm.uni-trier.de/public'
        ];

        echo view('templates/head');
        echo view('templates/navbar');
        echo view('pages/tasks_create', $data);
        return view('templates/footer');
    }


    public function postSubmit()
{
    $taskModel = new TaskModel();

    $rules = [
        'taskartenid' => 'required|integer',
        'personenid'  => 'required|integer',
        'spaltenid'   => 'required|integer',
        'tasks'       => 'required|max_length[255]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $data = [
        'personenid'      => $this->request->getPost('personenid'),
        'taskartenid'     => $this->request->getPost('taskartenid'),
        'spaltenid'       => $this->request->getPost('spaltenid'),
        'tasks'           => $this->request->getPost('tasks'),
        'erinnerungsdatum'=> $this->request->getPost('erinnerungsdatum'),
        'erinnerung'      => $this->request->getPost('erinnerung') ? 1 : 0,
        'notizen'         => $this->request->getPost('notizen'),
        'erledigt'        => 0,
        'geloescht'       => 0,
        'sortid'          => 1,
        'erstelldatum'    => date('Y-m-d H:i:s'),
    ];
    $taskModel->insert($data);
return redirect()->to('https://team03.wi1cm.uni-trier.de/public/tasks');
    }

    public function getEdit($id)
    {
        $taskModel = new TaskModel();
        $task = $taskModel->find($id);

        $taskartenModel = new TaskartenModel();
        $personenModel = new PersonenModel();
        $spaltenModel = new SpaltenModel();

        $data = [
            'task' => $task,
            'taskarten' => $taskartenModel->getData(),
            'personen' => $personenModel->getData(),
            'spalten' => $spaltenModel->getData(),
            'base_url' => 'https://team03.wi1cm.uni-trier.de/public'
        ];

        echo view('templates/head');
        echo view('templates/navbar');
        echo view('pages/tasks_create', $data);
        return view('templates/footer');
    }

    public function postEdit($id)
    {
        $taskModel = new TaskModel();

        $rules = [
            'taskartenid' => 'required|integer',
            'personenid'  => 'required|integer',
            'spaltenid'   => 'required|integer',
            'tasks'       => 'required|max_length[255]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'personenid'      => $this->request->getPost('personenid'),
            'taskartenid'     => $this->request->getPost('taskartenid'),
            'spaltenid'       => $this->request->getPost('spaltenid'),
            'tasks'           => $this->request->getPost('tasks'),
            'erinnerungsdatum'=> $this->request->getPost('erinnerungsdatum'),
            'erinnerung'      => $this->request->getPost('erinnerung') ? 1 : 0,
            'notizen'         => $this->request->getPost('notizen'),
            'erledigt'        => $this->request->getPost('erledigt') ? 1 : 0,
        ];

        $taskModel->update($id, $data);


        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/tasks');
    }

    public function getDelete($id)
    {
        $taskModel = new TaskModel();
        $taskModel->delete($id);

        return redirect()->to('https://team03.wi1cm.uni-trier.de/public/tasks');
    }
}
