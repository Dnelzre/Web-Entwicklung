<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks'; // Name Ihrer Tabelle

    public function getTasksAlphabetically()
    {
        // Nutzt den Query Builder: SELECT * FROM tasks ORDER BY tasks ASC
        return $this->orderBy('tasks', 'ASC')->findAll();
    }
}