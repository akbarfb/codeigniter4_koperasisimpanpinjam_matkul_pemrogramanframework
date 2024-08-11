<?php

namespace App\Controllers;

use App\Models\SimpananPokokModel;
use App\Models\AnggotaModel;
use CodeIgniter\Controller;

class SimpananPokokController extends Controller
{
    protected $simpananPokokModel;
    protected $anggotaModel;

    public function __construct()
    {
        $this->simpananPokokModel = new SimpananPokokModel();
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $data['simpanan_pokok'] = $this->simpananPokokModel->findAll();
        return view('simpanan_pokok/index', $data);
    }

    public function create()
    {
        $data['anggota'] = $this->anggotaModel->findAll(); // Untuk dropdown anggota
        return view('simpanan_pokok/create', $data);
    }

    public function store()
    {
        $this->simpananPokokModel->save([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal')
        ]);

        return redirect()->to('/simpanan_pokok');
    }

    public function edit($id)
    {
        $data['simpanan_pokok'] = $this->simpananPokokModel->find($id);
        $data['anggota'] = $this->anggotaModel->findAll(); // Untuk dropdown anggota
        return view('simpanan_pokok/edit', $data);
    }

    public function update($id)
    {
        $this->simpananPokokModel->update($id, [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal')
        ]);

        return redirect()->to('/simpanan_pokok');
    }

    public function delete($id)
    {
        $this->simpananPokokModel->delete($id);
        return redirect()->to('/simpanan_pokok');
    }
}
