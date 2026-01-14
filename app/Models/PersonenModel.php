<?php
namespace App\Models;

use CodeIgniter\Model;

class PersonenModel extends Model
{
    protected $table = 'personen';
    protected $allowedFields = ['vorname', 'name', 'email', 'passwort'];

    public function getData()
    {
        return $this->findAll();
    }
}
