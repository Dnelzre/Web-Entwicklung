<?php

namespace App\Models;

use CodeIgniter\Model;

class BoardsModel extends Model
{
    protected $table = 'boards';
    protected $primaryKey = 'id';

    // Die Datenbanktabelle enthält laut DB nur 'id' und 'name'.
    // allowedFields daher auf das tatsächlich vorhandene Feld reduzieren.
    protected $allowedFields = [
        'name'
    ];

    public function getData()
    {
        return $this->orderBy('id', 'ASC')->findAll();
    }
}
