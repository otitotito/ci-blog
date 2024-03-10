<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'admin',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Tito',
            'email' => 'rizal.skycrome@gmail.com'
        ];
        $this->db->table('admin')->insert($data); // masukkan data ke table admin
    }
}
