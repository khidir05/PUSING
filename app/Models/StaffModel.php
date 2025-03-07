<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'NIP';
    protected $allowedFields = ['NIP', 'nama', 'jabatan'];

    public function getStaffByNIP($NIP)
    {
        return $this->where('NIP', $NIP)->first();
    }
}