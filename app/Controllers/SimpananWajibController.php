<?php

namespace App\Controllers;

use App\Models\SimpananWajibModel;
use App\Models\AnggotaModel;
use CodeIgniter\Controller;

class SimpananWajibController extends Controller
{
    protected $simpananWajibModel;
    protected $anggotaModel;

    public function __construct()
    {
        $this->simpananWajibModel = new SimpananWajibModel();
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $data['simpanan_wajib'] = $this->simpananWajibModel->findAll();
        return view('simpanan_wajib/index', $data);
    }

    public function create()
    {
        $data['anggota'] = $this->anggotaModel->findAll(); // Untuk dropdown anggota
        return view('simpanan_wajib/create', $data);
    }

    public function store()
    {
        $this->simpananWajibModel->save([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal')
        ]);

        return redirect()->to('/simpanan_wajib');
    }

    public function edit($id)
    {
        $data['simpanan_wajib'] = $this->simpananWajibModel->find($id);
        $data['anggota'] = $this->anggotaModel->findAll(); // Untuk dropdown anggota
        return view('simpanan_wajib/edit', $data);
    }

    public function update($id)
    {
        $this->simpananWajibModel->update($id, [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'jumlah' => $this->request->getPost('jumlah'),
            'tanggal' => $this->request->getPost('tanggal')
        ]);

        return redirect()->to('/simpanan_wajib');
    }

    public function delete($id)
    {
        $this->simpananWajibModel->delete($id);
        return redirect()->to('/simpanan_wajib');
    }
}
