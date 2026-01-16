<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonenModel;

class Personen extends BaseController
{
    public function getindex()
    {
        $model = new PersonenModel();
        $personen = $model->getData();

        return view('templates/head')
            . view('templates/navbar')
            . view('pages/personen', [
                'personen' => $personen
            ])
            . view('templates/footer');
    }
}
