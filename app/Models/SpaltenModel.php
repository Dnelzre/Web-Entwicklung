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
        // Builder über die Spalten-Tabelle
        $builder = $this->db->table($this->table . ' s');

        // Selektiere benötigte Felder und den Namen des zugehörigen Boards (falls vorhanden)
        $builder->select("s.id, s.sortid, s.spalte, s.spaltenbeschreibung, s.boardsid, b.name AS boardname");
        $builder->join('boards b', 'b.id = s.boardsid', 'left');
        $builder->orderBy('s.sortid', 'ASC');

        return $builder->get()->getResultArray();
    }
}