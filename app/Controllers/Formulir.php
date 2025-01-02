<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;

class Formulir extends BaseController
{
    protected $biodata;

    public function __construct()
    {
        $this->biodata = new Biodata();
    }

    public function index()
    {
        return view('formulir/index');
    }

    public function simpan()
    {
        // Validasi input
        $validation = $this->validate([
            'nik' => 'required|numeric',
            'kewarganegaraan' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
            'asal_sekolah' => 'required',
            'jurusan_sekolah' => 'required',
            'tahun_lulus' => 'required|numeric|min_length[4]|max_length[4]',
            'pilihan_prodi1' => 'required',
            'pilihan_prodi2' => 'required',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembali ke form dengan error
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        // Ambil ID pengguna dari session
        $id_user = session()->get('id_akun');

        // Ambil data dari input
        $data = [
            'nik' => $this->request->getPost('nik'),
            'jk' => $this->request->getPost('jk'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'asal_sekolah' => $this->request->getPost('asal_sekolah'),
            'jurusan_sekolah' => $this->request->getPost('jurusan_sekolah'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'pilihan_1' => $this->request->getPost('pilihan_prodi1'),
            'pilihan_2' => $this->request->getPost('pilihan_prodi2'),
            'id_akun' => $id_user,
        ];

        // Simpan data ke database
        $formulirModel = new \App\Models\Biodata();

        if ($formulirModel->insert($data)) {
            // Redirect ke halaman sukses
            return redirect()->to('/success')->with('message', 'Data berhasil disimpan!');
        } else {
            // Redirect ke halaman form dengan error
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
        }
    }
}
