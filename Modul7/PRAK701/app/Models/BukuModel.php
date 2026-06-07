<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

    protected $validationRules = [
        'judul'        => 'required|string',
        'penulis'      => 'required|string',
        'penerbit'     => 'required|string',
        'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
    ];

    protected $validationMessages = [
        'judul' => [
            'required' => 'Judul buku wajib diisi!',
            'string'   => 'Judul buku harus berupa teks.'
        ],
        'penulis' => [
            'required' => 'Nama penulis wajib diisi!',
            'string'   => 'Nama penulis harus berupa teks.'
        ],
        'penerbit' => [
            'required' => 'Nama penerbit wajib diisi!',
            'string'   => 'Nama penerbit harus berupa teks.'
        ],
        'tahun_terbit' => [
            'required'     => 'Tahun terbit wajib diisi!',
            'numeric'      => 'Tahun terbit harus berupa angka.',
            'greater_than' => 'Tahun terbit harus lebih besar dari tahun 1800.',
            'less_than'    => 'Tahun terbit harus lebih kecil dari tahun 2024.'
        ]
    ];
}