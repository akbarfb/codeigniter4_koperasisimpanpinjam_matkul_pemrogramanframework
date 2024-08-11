<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = ['nama'];

    public function getTotalSaldoWajib($id_anggota)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('transaksi');
        $builder->selectSum('jumlah', 'total_saldo_wajib');
        $builder->where('id_anggota', $id_anggota);
        $builder->whereIn('jenis_transaksi', ['simpanan_wajib', 'penarikan_wajib']);
        $query = $builder->get();
        return $query->getRow() ? $query->getRow()->total_saldo_wajib : 0;
    }

    public function getTotalSaldoPokok($id_anggota)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('transaksi');
        $builder->selectSum('jumlah', 'total_saldo_pokok');
        $builder->where('id_anggota', $id_anggota);
        $builder->whereIn('jenis_transaksi', ['simpanan_pokok', 'penarikan_pokok']);
        $query = $builder->get();
        return $query->getRow() ? $query->getRow()->total_saldo_pokok : 0;
    }
}
