<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'nama'  => 'Oktavia Laila Qodari',
            'nim'   => '2410817120013',
            'prodi' => 'Teknologi Informasi'
        ];

        return view('home', $data);
    }
}