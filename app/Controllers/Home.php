<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function getindex()
    {
        echo  view('templates/head');
        echo view( 'templates/navbar');
        echo view('templates/footer');
        return view('Startseite.php');
    }
    public function getSpalten()
    {
        echo  view('templates/head');
        echo view( 'templates/navbar');
        echo view('templates/footer');
        return view('Startseite_Spalten');
    }
    public function getFormular()
    {
        echo  view('templates/head');
        echo view( 'templates/navbar');
        echo view('templates/footer');
        return view('startseite_formular');
    }

}