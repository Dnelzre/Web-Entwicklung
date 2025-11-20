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
        echo  view('templates/head');
        echo view( 'templates/navbar');
        echo view('templates/footer');
        return view('Startseite_Spalten');
    }
    public function formular()
    {

        echo  view('templates/head');
        echo view( 'templates/navbar');
        echo view('templates/footer');
        return view('startseite-formular');
    }

}