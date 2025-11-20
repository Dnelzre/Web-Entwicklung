<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo  view('templates/head');
        echo view( 'templates/navbar');
        echo view('templates/footer');
        return view('Startseite.php');
    }
    public function spalten()
    {
        return view('Startseite_Spalten');
    }
    public function formular()
    {
        return view('startseite-formular');
    }
    public function Startseite()
    {
        return view('Startseite');
    }
}