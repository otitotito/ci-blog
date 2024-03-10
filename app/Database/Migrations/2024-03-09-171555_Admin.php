<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5, //panjang value
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 25, //panjang value
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255, //panjang value
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 255, //panjang value
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255, //panjang value
                'unique' => true,
            ],
            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 25, //panjang value
            ],
            'last_login timestamp default now()'
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('admin', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('admin');
    }
}
