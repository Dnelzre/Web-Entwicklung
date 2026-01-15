<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tasks', 'taskartenid', 'personenid', 'spaltenid',
        'erinnerungsdatum', 'erinnerung', 'notizen', 'erledigt', 'geloescht'
    ];
    public function getTasksAlphabetically()
    {
        return $this->orderBy('tasks', 'ASC')->findAll();
    }
}
