<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        if (!empty(session())) {
            $mensaje = session('mensaje');
            return view('login', ["mensaje" => $mensaje]);
        }else {
            return view('inicio');

        }

        
    }

    public function inicio() : string {
        return view('inicio');
        
    }

    public function login() {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $user = new UsuarioModel();
             
        $datosUsuario = $user->obtenerUsuario(['usuario' => $usuario, 'password' => $password]);
        
        
        
        if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {
            
            $data = [
                        "usuario" => $datosUsuario[0]['usuario'],
                        "tipoUsuario" => $datosUsuario[0]['tipoUsuario']
                    ];
            $session = session(); 
            $session->set($data);
            return redirect()->to(base_url('/inicio'))->with('mensaje','1');
        }else {
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }

    public function salir() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

}
