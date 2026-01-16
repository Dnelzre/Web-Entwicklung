<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id', 'tasks', 'taskartenid', 'personenid', 'spaltenid',
        'erinnerungsdatum', 'erinnerung', 'notizen', 'erledigt', 'geloescht'
    ];

    public function getTasksWithDetails()
    {
        $builder = $this->db->table($this->table . ' t');

        $builder->select(
            "t.id, t.tasks, t.notizen, t.erledigt, t.personenid, p.vorname, p.name AS nachname, CONCAT(p.vorname, ' ', p.name) AS personenname, 
            t.spaltenid, s.spalte, t.taskartenid, ta.taskart, t.erinnerungsdatum"
        );

        $builder->join('personen p', 'p.id = t.personenid', 'left');
        $builder->join('spalten s', 's.id = t.spaltenid', 'left');
        $builder->join('taskarten ta', 'ta.id = t.taskartenid', 'left');

        $builder->orderBy('t.tasks', 'ASC');

        return $builder->get()->getResultArray();
    }
}
