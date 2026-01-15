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
    public function create()
    {
        return view('templates/head')
            . view('templates/navbar')
            . view('pages/task_form')
            . view('templates/footer');
    }

    public function store()
    {
        $model = new TaskModel();

        // Speichern mit Standardwerten 0 für erledigt/geloescht
        $model->save([
            'tasks'            => $this->request->getPost('tasks'),
            'taskartenid'      => $this->request->getPost('taskartenid'),
            'personenid'       => $this->request->getPost('personenid'),
            'spaltenid'        => $this->request->getPost('spaltenid'),
            'erinnerungsdatum' => $this->request->getPost('erinnerungsdatum'),
            'erinnerung'       => $this->request->getPost('erinnerung'),
            'notizen'          => $this->request->getPost('notizen'),
            'erledigt'         => 0,
            'geloescht'        => 0
        ]);

        return redirect()->to(base_url('tasks_view'));
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to(base_url('tasks_view'));
    }
}
