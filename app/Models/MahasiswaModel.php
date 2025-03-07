<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'nama', 'kelas', 'semester', 'status', 'id_prodi'];

    public function getMahasiswaByNIM($NIM)
    {
        return $this->where('NIM', $NIM)->first();
    }
}