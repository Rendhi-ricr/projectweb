<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembayaran extends Model
{
    protected $table            = 'tbl_pembayaran';
    protected $primaryKey       = 'id_bayar';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_akun",
        "tanggal_bayar",
        "bukti_bayar",
        "status_bayar",
       "metode_bayar" 

    ];
}