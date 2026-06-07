<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function loginSubmit()
    {
        $session = session();
        $model = new UserModel();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $user = $model->where('username', $username)->first();
        
        if ($user) {
            $verify_pass = password_verify($password, $user['password']);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'logged_in'=> TRUE
                ];
                $session->set($ses_data);
                
                return redirect()->to('/buku'); 
            } else {
                $session->setFlashdata('error', 'Password salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}