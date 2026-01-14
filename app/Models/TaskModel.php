<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $allowedFields = ['tasks']; // wichtig für Inserts/Updates

    public function getTasksAlphabetically()
    {
        return $this->orderBy('tasks', 'ASC')->findAll();
    }
}
