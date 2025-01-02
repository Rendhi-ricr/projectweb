<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Buat_akun extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {

        echo view ('buat_akun/index');
    
    }
    public function simpan ()
    {
        $data = [
        'nama_lengkap' => $this->request->getPost('nama_lengkap'),
        'email' => $this->request->getPost('email'),
        'password' => $this->request->getPost('password')
        ];
        $akun = new \App\Models\Akun();
        $akun->save($data);
        return redirect()->to('/login');

    }
}
