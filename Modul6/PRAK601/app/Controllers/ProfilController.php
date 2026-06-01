<?php

namespace App\Controllers;
use App\Models\ProfilModel;

class ProfilController extends BaseController
{
    protected $profilModel;

    public function __construct()
    {
        $this->profilModel = new ProfilModel();
    }

    public function beranda()
    {
        $data = $this->profilModel->getProfilData();
        return view('beranda', $data);
    }

    public function profil()
    {
        $data = $this->profilModel->getProfilData();
        return view('profil', $data);
    }
}