<?php

namespace App\Models;

use CodeIgniter\Model;

class AngsuranModel extends Model
{
    protected $table = 'angsuran';
    protected $primaryKey = 'id_angsuran';
    protected $allowedFields = ['id_anggota', 'jumlah_angsuran', 'tanggal_bayar', 'status'];
}
