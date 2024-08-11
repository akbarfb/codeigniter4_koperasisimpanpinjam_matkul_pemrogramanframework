<?php

namespace App\Controllers;

use App\Models\PinjamanModel;
use App\Models\AnggotaModel;
use CodeIgniter\Controller;

class Pinjaman extends BaseController
{

    protected $PinjamanModel;
    protected $anggotaModel;

    public function __construct()
    {
        $this->PinjamanModel = new PinjamanModel();
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $model = new PinjamanModel();
        $data['pinjaman'] = $model->findAll();

        foreach ($data['pinjaman'] as &$pinjaman) {
            $pinjaman['bunga'] = $model->hitungBunga($pinjaman['jumlah_pinjaman'], $pinjaman['persentase_bunga']);
            $pinjaman['total_pembayaran'] = $model->hitungTotalPembayaran($pinjaman['jumlah_pinjaman'], $pinjaman['persentase_bunga']);
            $pinjaman['status_label'] = $model->getStatusLabel($pinjaman['status']);
        }


        return view('pinjaman/index', $data);
    }

    public function create()
    {
        $data['anggota'] = $this->anggotaModel->findAll(); // Untuk dropdown anggota
        return view('pinjaman/create', $data);
    }
    public function store()
    {
        $model = new PinjamanModel();

        $jumlahPinjaman = $this->request->getPost('jumlah_pinjaman');
        $persentaseBunga = $this->request->getPost('persentase_bunga');

        $bunga = $model->hitungBunga($jumlahPinjaman, $persentaseBunga);
        $totalPembayaran = $model->hitungTotalPembayaran($jumlahPinjaman, $persentaseBunga);

        $status = $this->request->getPost('status');

        if ($status == 'rejected') {
            return redirect()->back()->with('error', 'Proses tidak dapat dilanjutkan karena pinjaman ditolak.');
        }

        $model = new PinjamanModel();
        $model->save([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_petugas' => $this->request->getPost('id_petugas'),
            'jumlah_pinjaman' => $jumlahPinjaman,
            'bunga' => $bunga,
            'tanggal_pinjaman' => $this->request->getPost('tanggal_pinjaman'),
            'tenor' => $this->request->getPost('tenor'),
            'status' => $this->request->getPost('status'),
            'persentase_bunga' => $persentaseBunga,
            'total_pembayaran' => $totalPembayaran
        ]);
        return redirect()->to('/pinjaman');
    }

    public function edit($id)
    {
        $model = new PinjamanModel();
        $data['pinjaman'] = $model->find($id);
        return view('pinjaman/edit', $data);
    }

    public function update($id)
    {
        $model = new PinjamanModel();

        $jumlahPinjaman = $this->request->getPost('jumlah_pinjaman');
        $persentaseBunga = $this->request->getPost('persentase_bunga');

        $bunga = $model->hitungBunga($jumlahPinjaman, $persentaseBunga);
        $totalPembayaran = $model->hitungTotalPembayaran($jumlahPinjaman, $persentaseBunga);

        $model = new PinjamanModel();
        $model->save([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'id_petugas' => $this->request->getPost('id_petugas'),
            'jumlah_pinjaman' => $jumlahPinjaman,
            'bunga' => $bunga,
            'tanggal_pinjaman' => $this->request->getPost('tanggal_pinjaman'),
            'tenor' => $this->request->getPost('tenor'),
            'status' => $this->request->getPost('status'),
            'persentase_bunga' => $persentaseBunga,
            'total_pembayaran' => $totalPembayaran
        ]);
        return redirect()->to('/pinjaman');
    }

    public function delete($id)
    {
        $model = new PinjamanModel();
        $model->delete($id);
        return redirect()->to('/pinjaman');
    }
}
