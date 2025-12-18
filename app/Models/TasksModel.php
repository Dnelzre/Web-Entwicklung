<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'personen';
    protected $allowedFields = ['vorname', 'name', 'email', 'passwort'];

    public function getData()
    {
        return $this->findAll();
    }
}
