<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\Biodata;

class Home extends BaseController
{
    protected $pendaftaranModel;

    public function __construct()
    {
        $this->pendaftaranModel = new Biodata();
    }

    public function index()
    {
        $data = [
            'pendaftaran' => $this->pendaftaranModel->getAll(),
        ];
        return view('admin/index', $data);
    }

    public function detail($id_biodata)
    {
        $pendaftaran = $this->pendaftaranModel->getAll();
        $data = [
            'pendaftaran' => array_filter($pendaftaran, function ($item) use ($id_biodata) {
                return $item['id_biodata'] == $id_biodata;
            })[0] ?? null,
        ];

        if (!$data['pendaftaran']) {
            return redirect()->to('admin/home')->with('error', 'Data tidak ditemukan.');
        }

        return view('admin/detail', $data);
    }
}
