<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Bayar extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {

        echo view('Bayar/index');
    }
    public function simpan()
    {
        $dataBerkas = $this->request->getFile('bukti_pembayaran');
        if ($dataBerkas->getError() != 4) {

            $fileName = $dataBerkas->getName();

            $dataBerkas->move("bukti", $fileName);
        }

        $data = [
            'id_akun' => session()->get('id_akun'),
            'tanggal_bayar' => date('Y-m-d H:i:s'),
            'bukti_bayar' => $fileName,
            'status_bayar' => 'Belum Dikonfirmasi',
            'metode_bayar' => $this->request->getPost('metode_bayar'),
            'jumlah_bayar' => 2000000
        ];
        $akun = new \App\Models\Pembayaran();
        $akun->save($data);
        return redirect()->to('/formulir');
    }
}
