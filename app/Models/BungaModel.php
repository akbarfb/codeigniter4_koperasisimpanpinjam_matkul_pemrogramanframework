<?php

namespace App\Models;

use CodeIgniter\Model;

class BungaModel extends Model
{
    protected $table = 'bunga';
    protected $primaryKey = 'id_bunga';
    protected $allowedFields = ['id_anggota', 'jumlah_pinjaman', 'tanggal_pinjaman', 'persentase_bunga', 'jumlah_bunga'];
}
