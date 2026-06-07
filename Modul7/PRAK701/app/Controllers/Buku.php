<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) return redirect()->to('/login');

        $bukuModel = new BukuModel();
        
        $data = [
            'buku' => $bukuModel->findAll() 
        ];

        return view('buku/index', $data); 
    }

    public function create()
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        return view('buku/create');
    }

    public function store()
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $bukuModel = new \App\Models\BukuModel();

        $data = [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        if (!$bukuModel->save($data)) {
            return redirect()->back()->withInput()->with('errors', $bukuModel->errors());
        }

        session()->setFlashdata('success', 'Buku baru berhasil ditambahkan!');
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $bukuModel = new \App\Models\BukuModel();
        $data = ['buku' => $bukuModel->find($id)];

        if (empty($data['buku'])) return redirect()->to('/buku');

        return view('buku/edit', $data);
    }

    public function update($id)
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $bukuModel = new \App\Models\BukuModel();
        $data = [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        if (!$bukuModel->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $bukuModel->errors());
        }

        session()->setFlashdata('success', 'Data buku berhasil diubah!');
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        if (!session()->get('logged_in')) return redirect()->to('/login');

        $bukuModel = new \App\Models\BukuModel();
        
        $buku = $bukuModel->find($id);
        if ($buku) {
            $bukuModel->delete($id);
            session()->setFlashdata('success', 'Data buku berhasil dihapus!');
        }

        return redirect()->to('/buku');
    }
}