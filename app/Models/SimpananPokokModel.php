<?php
namespace App\Models;

use CodeIgniter\Model;

class SimpananPokokModel extends Model
{
    protected $table = 'simpanan_pokok';
    protected $primaryKey = 'id_simpanan_pokok';
    protected $allowedFields = ['id_anggota', 'jumlah', 'tanggal'];

    public function getTotalSimpananPokok($id_anggota)
    {
        // Menggunakan Query Builder untuk menghitung jumlah
        return $this->where('id_anggota', $id_anggota)->selectSum('jumlah', 'total')->first()['total'];
    }
}
