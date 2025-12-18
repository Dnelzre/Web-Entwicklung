<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    protected $table = 'personen';
    protected $allowedFields = ['vorname', 'name', 'email', 'passwort']; // ggf. anpassen

    public function getData()
    {
        return $this->findAll();
    }
}
