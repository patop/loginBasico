<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tipoUsuario'     =>[

            ] 
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_usuario');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuario');
    }
}