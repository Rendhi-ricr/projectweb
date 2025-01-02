<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Login extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        echo view ('login/index');
    
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $akun = new \App\Models\Akun();
        $cek_email = $akun->where('email', $email)->countAll();
        $cek_password = $akun->where('password', $password)->countAll();
        if ($cek_email > 0 && $cek_password > 0) {
            $data = $akun-> where('email', $email)->first();
            $session_login = [
                'nama_lengkap' => $data ['nama_lengkap'],
                'email' => $data ['email'],
                'id_akun' => $data['id_akun']
            ];
            session()->set($session_login);
           // session()->set('nama','test');  //buat set session
          //dd(session()->get('nama_lengkap'));//
            return redirect()->to('/pembayaran');
        }
        else {
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
