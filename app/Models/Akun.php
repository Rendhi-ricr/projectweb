<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun extends Model
{
    protected $table            = 'tbl_akun';
    protected $primaryKey       = 'id_akun';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "nama_lengkap",
        "email",
        "password"
    ];
}