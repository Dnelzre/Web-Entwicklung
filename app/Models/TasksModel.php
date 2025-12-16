<?php

namespace App\Models;

use CodeIgniter\Model;

class TasksModel extends Model
{
    public function getData($id = NULL)
    {

        $this->personen = $this->db->table('personen');
        $this->personen->select('*');

        if ($id != NULL)
            $this->personen->where('personen.id', $id);

        $this->personen->orderBy('name');
        $result = $this->personen->get();

        if ($id != NULL)
            return $result->getRowArray();
        else
            $result = $result->getResultArray();
    }
}