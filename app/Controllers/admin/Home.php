<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\Biodata;

class Home extends BaseController
{
    public function index()
    {
        $pendaftaranModel = new Biodata();

        // Ambil semua data dari tabel pendaftaran
        $data = [
            'pendaftaran' => $pendaftaranModel->findAll(),
            'nama' => session()->get('nama_lengkap')
        ];

        // Tampilkan data ke view
        return view('admin/index', $data);
    }
}
