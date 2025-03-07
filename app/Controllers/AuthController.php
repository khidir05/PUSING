<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\StaffModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $nama = $this->request->getPost('nama');
        $password = $this->request->getPost('password');

        $mahasiswaModel = new MahasiswaModel();
        $staffModel = new StaffModel();

        $mahasiswa = $mahasiswaModel->where('nama', $nama)->where('NIM', $password)->first();
        if ($mahasiswa) {
            session()->set('user', $mahasiswa);
            session()->set('user_type', 'mahasiswa');
            return redirect()->to('/mahasiswa');
        }

        $staff = $staffModel->where('nama', $nama)->where('NIP', $password)->first();
        if ($staff) {
            session()->set('user', $staff);
            session()->set('user_type', 'staff');
            return redirect()->to('/staff');
        }

        return redirect()->back()->with('error', 'Invalid login credentials');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}