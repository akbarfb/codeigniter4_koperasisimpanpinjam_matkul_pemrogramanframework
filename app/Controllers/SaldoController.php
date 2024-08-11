<?php

namespace App\Controllers;

use App\Models\SimpananWajibModel;
use App\Models\SimpananPokokModel;

class SaldoController extends BaseController
{
    public function index()
    {
        $simpananWajibModel = new SimpananWajibModel();
        $simpananPokokModel = new SimpananPokokModel();

        // Mendapatkan semua anggota
        $anggotaModel = new \App\Models\AnggotaModel();
        $anggotaList = $anggotaModel->findAll();

        $data = [];

        foreach ($anggotaList as $anggota) {
            $id_anggota = $anggota['id_anggota'];
            $totalSimpananWajib = $simpananWajibModel->getTotalSimpananWajib($id_anggota);
            $totalSimpananPokok = $simpananPokokModel->getTotalSimpananPokok($id_anggota);

            $data[] = [
                'id_anggota' => $id_anggota,
                'jumlah_saldo' => $totalSimpananWajib + $totalSimpananPokok
            ];
        }

        $data['saldo'] = $data; // Data untuk view

        return view('saldo/index', $data);
    }
}
