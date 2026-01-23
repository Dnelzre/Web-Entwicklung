<?php

namespace App\Models;

use CodeIgniter\Model;

class SpaltenModel extends Model
{
    protected $table = 'spalten';
    protected $primaryKey = 'id';
    protected $allowedFields = ['spalte', 'spaltenbeschreibung', 'sortid', 'boardsid'];

    public function getData($boardsid = null)
    {
        // Holt die Spalten und verknüpft sie mit der Tabelle 'boards'
        $builder = $this->db->table('spalten s')
            ->select('s.*, b.name as boardname')
            ->join('boards b', 'b.id = s.boardsid', 'left')
            ->orderBy('s.sortid', 'ASC');

        if ($boardsid !== null && $boardsid !== '') {
            $builder->where('s.boardsid', $boardsid);
        }

        return $builder->get()->getResultArray();
    }
}