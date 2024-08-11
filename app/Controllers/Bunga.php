<?php

namespace App\Controllers;

use App\Models\BungaModel;
use CodeIgniter\Controller;

class Bunga extends BaseController
{
    public function index()
    {
        $model = new BungaModel();
        $data['bunga'] = $model->findAll();
        return view('bunga/index', $data);
    }

    public function create()
    {
        return view('bunga/create');
    }

    public function store()
    {
        $model = new BungaModel();
        $model->save([
            'id_anggota' => $this->request->getPost('id_anggota'),
            'jumlah_pinjaman' => $this->request->getPost('jumlah_pinjaman'),
            'tanggal_pinjaman' => $this->request->getPost('tanggal_pinjaman'),
            'persentase_bunga' => $this->request->getPost('persentase_bunga'),
            'jumlah_bunga' => $this->request->getPost('jumlah_bunga')
        ]);
        return redirect()->to('/bunga');
    }

    public function edit($id)
    {
        $model = new BungaModel();
        $data['bunga'] = $model->find($id);
        return view('bunga/edit', $data);
    }

    public function update($id)
    {
        $model = new BungaModel();
        $model->update($id, [
            'id_anggota' => $this->request->getPost('id_anggota'),
            'jumlah_pinjaman' => $this->request->getPost('jumlah_pinjaman'),
            'tanggal_pinjaman' => $this->request->getPost('tanggal_pinjaman'),
            'persentase_bunga' => $this->request->getPost('persentase_bunga'),
            'jumlah_bunga' => $this->request->getPost('jumlah_bunga')
        ]);
        return redirect()->to('/bunga');
    }

    public function delete($id)
    {
        $model = new BungaModel();
        $model->delete($id);
        return redirect()->to('/bunga');
    }
}
