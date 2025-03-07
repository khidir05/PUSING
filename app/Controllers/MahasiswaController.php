<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\PengajuanModel;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswa = session()->get('user');
        return view('mahasiswa/index', ['mahasiswa' => $mahasiswa]);
    }

    public function submitPengajuan()
    {
        $pengajuanModel = new PengajuanModel();
        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
            'semester' => $this->request->getPost('semester'),
            'tgl_pengajuan' => date('Y-m-d'),
            'semester_cuti' => $this->request->getPost('semester_cuti'),
            'tgl_mulai_cuti' => $this->request->getPost('tgl_mulai_cuti'),
            'tgl_selesai_cuti' => $this->request->getPost('tgl_selesai_cuti'),
            'alasan' => $this->request->getPost('alasan'),
            'dokumen' => $this->request->getPost('dokumen'),
            'status_pengajuan' => 'Menunggu'
        ];
        $pengajuanModel->save($data);
        return redirect()->to('/mahasiswa/history');
    }

    public function history()
    {
        $NIM = session()->get('user')['NIM'];
        $pengajuanModel = new PengajuanModel();
        $pengajuan = $pengajuanModel->getPengajuanByNIM($NIM);
        return view('mahasiswa/history', ['pengajuan' => $pengajuan]);
    }
}