<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
   public function obtenerUsuario($data) {
    $Usuario = $this->db->table('t_usuario');
    $user = $data['usuario'];
    $pass = $data['password'];
    $Usuario->where('usuario', $user);

    return $Usuario->get()->getResultArray();
    
   }
}
