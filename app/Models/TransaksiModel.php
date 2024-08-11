<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $allowedFields = ['id_anggota', 'jenis_simpanan', 'jumlah', 'tanggal'];

    // Optional: Validation rules
    protected $validationRules = [
        'id_anggota' => 'required|integer',
        'jenis_simpanan' => 'required|in_list[simpanan_wajib,simpanan_pokok]',
        'jumlah' => 'required|decimal',
        'tanggal' => 'required|valid_date'
    ];
}
