<?php

namespace App\Controllers;

use App\Models\PetugasModel;
use CodeIgniter\Controller;

class PetugasController extends Controller
{
    protected $petugasModel;

    public function __construct()
    {
        $this->petugasModel = new PetugasModel();
    }

    public function index()
    {
        $data['petugas'] = $this->petugasModel->findAll();
        return view('petugas/index', $data);
    }

    public function create()
    {
        return view('petugas/create');
    }

    public function store()
    {
        $this->petugasModel->save([
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk')
        ]);

        return redirect()->to('/petugas');
    }

    public function edit($id)
    {
        $data['petugas'] = $this->petugasModel->find($id);
        return view('petugas/edit', $data);
    }

    public function update($id)
    {
        $this->petugasModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'telepon' => $this->request->getPost('telepon'),
            'email' => $this->request->getPost('email'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk')
        ]);

        return redirect()->to('/petugas');
    }

    public function delete($id)
    {
        $this->petugasModel->delete($id);
        return redirect()->to('/petugas');
    }
}
