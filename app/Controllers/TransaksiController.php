<?php namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\SimpananWajibModel;
use App\Models\SimpananPokokModel;
use App\Models\TransaksiModel;

class TransaksiController extends BaseController
{
    protected $anggotaModel;
    protected $simpananWajibModel;
    protected $simpananPokokModel;
    protected $transaksiModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
        $this->simpananWajibModel = new SimpananWajibModel();
        $this->simpananPokokModel = new SimpananPokokModel();
        $this->transaksiModel = new TransaksiModel();
    }

    public function create()
    {
        $data = [
            'anggota' => $this->anggotaModel->findAll(),
        ];
        return view('transaksi/create', $data);
    }

    public function store()
    {
        $idAnggota = $this->request->getPost('id_anggota');
        $jenisSimpanan = $this->request->getPost('jenis_simpanan');
        $jumlah = $this->request->getPost('jumlah');
        $tanggal = $this->request->getPost('tanggal');

        if ($jenisSimpanan == 'simpanan_wajib') {
            $this->simpananWajibModel->where('id_anggota', $idAnggota)->set('jumlah', 'jumlah - ' . $jumlah, FALSE)->update();
        } elseif ($jenisSimpanan == 'simpanan_pokok') {
            $this->simpananPokokModel->where('id_anggota', $idAnggota)->set('jumlah', 'jumlah - ' . $jumlah, FALSE)->update();
        }

        $data = [
            'id_anggota' => $idAnggota,
            'jenis_simpanan' => $jenisSimpanan,
            'jumlah' => $jumlah,
            'tanggal' => $tanggal,
        ];

        $this->transaksiModel->save($data);

        return redirect()->to('/transaksi');
    }

    public function index()
    {
        $data['transaksi'] = $this->transaksiModel->findAll();
        return view('transaksi/index', $data);
    }
}
