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
        'prodi_1',
        'prodi_2',
        'id_akun',
    ];

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
