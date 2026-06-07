<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admin@prak701.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT) 
        ];

        $this->db->table('user')->insert($data);
    }
}