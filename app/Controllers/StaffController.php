<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\StaffModel;
use App\Models\PengajuanModel;

class StaffController extends BaseController
{
    public function index()
    {
        $staff = session()->get('user');
        return view('staff/index', ['staff' => $staff]);
    }

    public function manageMahasiswa()
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();
        return view('staff/manage_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function manageStaff()
    {
        $staffModel = new StaffModel();
        $staff = $staffModel->findAll();
        return view('staff/manage_staff', ['staff' => $staff]);
    }

    public function approvePengajuan($id)
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuanModel->update($id, ['status_pengajuan' => 'Disetujui']);
        return redirect()->to('/staff/pengajuan');
    }

    public function declinePengajuan($id)
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuanModel->update($id, ['status_pengajuan' => 'Ditolak']);
        return redirect()->to('/staff/pengajuan');
    }

    public function viewPengajuan()
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuan = $pengajuanModel->getPengajuanByStatus('Menunggu');
        return view('staff/pengajuan', ['pengajuan' => $pengajuan]);
    }

    public function viewAllPengajuan()
    {
        $pengajuanModel = new PengajuanModel();
        $pengajuan = $pengajuanModel->findAll();
        return view('staff/all_pengajuan', ['pengajuan' => $pengajuan]);
    }
}