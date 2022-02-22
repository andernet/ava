<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()		 	
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_nome'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'senha'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_user_tipo'       => [
                'type'       => 'INT',
                'constraint' => '2',
            ]
        ]);

        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users', false);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}