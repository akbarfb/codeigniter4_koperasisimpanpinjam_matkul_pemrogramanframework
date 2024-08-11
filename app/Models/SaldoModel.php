<?php

namespace App\Models;

use CodeIgniter\Model;

class SaldoModel extends Model
{
    protected $table = 'saldo';
    protected $primaryKey = 'id_saldo';
    protected $allowedFields = ['id_anggota', 'saldo_wajib', 'saldo_pokok'];

    // Method untuk mendapatkan saldo
    public function getSaldo($id_anggota)
    {
        return $this->where('id_anggota', $id_anggota)->first();
    }

    // Method untuk memperbarui saldo
    public function updateSaldo($id_anggota, $saldo_wajib, $saldo_pokok)
    {
        return $this->update($id_anggota, [
            'saldo_wajib' => $saldo_wajib,
            'saldo_pokok' => $saldo_pokok
        ]);
    }
}
