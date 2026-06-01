<?php

namespace App\Models;
use CodeIgniter\Model;

class ProfilModel extends Model
{
    public function getProfilData()
    {
        return [
            'nama'  => 'Oktavia Laila Qodari', 
            'nim'   => '2410817120013',       
            'prodi' => 'Teknologi Informasi',
            'hobi'  => 'Fotografi dan Eksplorasi Alam',
            'skill' => 'Mobile Development (Kotlin, Jetpack Compose), Web Backend (PHP)'
        ];
    }
}