<?php

namespace App\Models;

use CodeIgniter\Model;

class Biodata extends Model
{
    protected $table = 'tbl_biodata';
    protected $primaryKey = 'id_biodata';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nik',
        'nama',
        'email',
        'jk',
        'kewarganegaraan',
        'alamat',
        'no_telepon',
        'asal_sekolah',
        'jurusan_sekolah',
        'tahun_lulus',
        'nisn',
        'nilai_rata_rata',
        'no_ijazah',
        'nama_ayah',
        'nik_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'nik_ibu',
        'pekerjaan_ibu',
        'pilihan_prodi1',
        'pilihan_prodi2',
        'status',
        'id_akun',
    ];

    public function getAll()
    {
        return $this->select('tbl_biodata.*, tbl_akun.nama_lengkap, tbl_akun.email AS akun_email')
            ->join('tbl_akun', 'tbl_akun.id_akun = tbl_biodata.id_akun', 'left')
            ->findAll();
    }


    public function data_biodata($id_biodata)
    {
        return $this->find($id_biodata);
    }

    public function update_data($data, $id_biodata)
    {
        return $this->db->table($this->table)->update($data, ['id_biodata' => $id_biodata]);
    }

    public function delete_data($id_biodata)
    {
        return $this->db->table($this->table)->delete(['id_biodata' => $id_biodata]);
    }
}
