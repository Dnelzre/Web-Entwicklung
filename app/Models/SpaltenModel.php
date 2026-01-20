<?php

namespace App\Models;

use CodeIgniter\Model;

class SpaltenModel extends Model
{
    protected $table = 'spalten';
    protected $primaryKey = 'id';
    protected $allowedFields = ['spalte', 'spaltenbeschreibung', 'sortid', 'boardsid'];

    public function getData()
    {
        // Holt die Spalten und verknüpft sie mit der Tabelle 'boards'
        return $this->db->table('spalten s')
            ->select('s.*, b.name as boardname')
            ->join('boards b', 'b.id = s.boardsid', 'left')
            ->orderBy('s.sortid', 'ASC')
            ->get()
            ->getResultArray();
    }
}