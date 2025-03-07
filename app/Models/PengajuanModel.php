<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id_pengajuan';
    protected $allowedFields = ['NIM', 'nama', 'kelas', 'semester', 'tgl_pengajuan', 'semester_cuti', 'tgl_mulai_cuti', 'tgl_selesai_cuti', 'alasan', 'dokumen', 'status_pengajuan'];

    public function getPengajuanByNIM($NIM)
    {
        return $this->where('NIM', $NIM)->findAll();
    }

    public function getPengajuanByStatus($status)
    {
        return $this->where('status_pengajuan', $status)->findAll();
    }
}