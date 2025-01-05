<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\Biodata;
use App\Models\Akun;

class Home extends BaseController
{
    protected $pendaftaranModel, $akun;

    public function __construct()
    {
        $this->pendaftaranModel = new Biodata();
        $this->akun = new Akun();
    }

    public function index()
    {
        $data = [
            'pendaftaran' => $this->pendaftaranModel->getAll(),
        ];
        return view('admin/index', $data);
    }

    public function tambah()
    {
        // Logika tambah data (implementasi belum diberikan)
    }

    public function detail($id_biodata)
    {
        $akun = $this->akun->findAll();
        $pendaftaran = $this->pendaftaranModel->find($id_biodata);
        $data = [
            'pendaftaran' => $pendaftaran,
            'akun' => $akun,
        ];
        return view('admin/detail', $data);
    }

    public function update($id)
    {
        // Logika update data (implementasi belum diberikan)
    }

    public function delete($id)
    {
        $this->pendaftaranModel->delete($id);
        return redirect()->to('admin/home');
    }
}
