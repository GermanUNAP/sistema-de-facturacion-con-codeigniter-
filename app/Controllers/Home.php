<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('welcome_message');
    }
    public function hola(){
        echo view('cabecera');
        echo view('login');
        
    }
}
