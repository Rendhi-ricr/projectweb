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
        $validationRules = [
            'nik' => 'required|numeric',
            'jk' => 'required',
            'kewarganegaraan' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
            'asal_sekolah' => 'required',
            'jurusan_sekolah' => 'required',
            'tahun_lulus' => 'required|numeric|min_length[4]|max_length[4]',
            'nisn' => 'required|numeric',
            'nilai_rata_rata' => 'required|numeric',
            'no_ijazah' => 'required',
            'nama_ayah' => 'required',
            'nik_ayah' => 'required|numeric',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'nik_ibu' => 'required|numeric',
            'pekerjaan_ibu' => 'required',
            'pilihan_prodi1' => 'required',
            'pilihan_prodi2' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        // Ambil ID akun dari session
        $id_user = session()->get('id_akun');

        // Ambil semua data input
        $data = [
            'nik' => $this->request->getPost('nik'),
            'jk' => $this->request->getPost('jk'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'asal_sekolah' => $this->request->getPost('asal_sekolah'),
            'jurusan_sekolah' => $this->request->getPost('jurusan_sekolah'),
            'tahun_lulus' => $this->request->getPost('tahun_lulus'),
            'nisn' => $this->request->getPost('nisn'),
            'nilai_rata_rata' => $this->request->getPost('nilai_rata_rata'),
            'no_ijazah' => $this->request->getPost('no_ijazah'),
            'nama_ayah' => $this->request->getPost('nama_ayah'),
            'nik_ayah' => $this->request->getPost('nik_ayah'),
            'pekerjaan_ayah' => $this->request->getPost('pekerjaan_ayah'),
            'nama_ibu' => $this->request->getPost('nama_ibu'),
            'nik_ibu' => $this->request->getPost('nik_ibu'),
            'pekerjaan_ibu' => $this->request->getPost('pekerjaan_ibu'),
            'pilihan_prodi1' => $this->request->getPost('pilihan_prodi1'),
            'pilihan_prodi2' => $this->request->getPost('pilihan_prodi2'),
            'id_akun' => $id_user,
        ];

        if ($this->biodata->insert($data)) {
            return redirect()->to('/success')->with('message', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
        }
    }
}
