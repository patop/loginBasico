<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function inicio() : string {
        return view('inicio');
        
    }

    public function login() {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $user = new UsuarioModel();
    }
}
