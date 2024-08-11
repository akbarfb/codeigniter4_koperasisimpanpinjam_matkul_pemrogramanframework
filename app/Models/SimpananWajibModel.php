<?php
namespace App\Models;

use CodeIgniter\Model;

class SimpananWajibModel extends Model
{
    protected $table = 'simpanan_wajib';
    protected $primaryKey = 'id_simpanan_wajib';
    protected $allowedFields = ['id_anggota', 'jumlah', 'tanggal'];

    public function getTotalSimpananWajib($id_anggota)
    {
        // Menggunakan Query Builder untuk menghitung jumlah
        return $this->where('id_anggota', $id_anggota)->selectSum('jumlah', 'total')->first()['total'];
    }
}
