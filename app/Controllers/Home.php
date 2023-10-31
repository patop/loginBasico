<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function inicio() : string {
        return view('inicio');
        
    }
}
