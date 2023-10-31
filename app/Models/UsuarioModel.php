<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
   public function obtenerUsuario($data) {
    $usuario = $this->db->table('t_usuarios');
    $usuario->where($data);

    return $usuario->get()->getResultArray();
    
   }
}
