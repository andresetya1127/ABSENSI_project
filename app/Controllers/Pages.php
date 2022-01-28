<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\MatkulModel;
use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{

    function __construct()
    {
        $this->dosenModel = new DosenModel();
        $this->matkulModel = new MatkulModel();
    }
    public function index()

    {
        $data = [
            'title' => 'Home STMIK'
        ];
        return view('pages/Home', $data);
    }

    public function Menu()
    {
        $data = [
            'title' => 'Menu'
        ];
        return view('pages/Menu_data', $data);
    }

    public function dtdosen()
    {
        $matkul = $this->matkulModel->findAll();
        $dosen = $this->dosenModel->getAll();
        $data = [
            'title' => 'Data Dosen',
            'dosen' => $dosen,
            'matkul' => $matkul
        ];
        return view('pages/Data_dosen', $data);
    }

    public function save()
    {
        $this->dosenModel->save([
            'nama_dosen' => $this->request->getVar('nama_dosen'),
            'nidn' => $this->request->getVar('nidn'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'id_matkul' => $this->request->getVar('id_matkul')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Disimpan.');
        return redirect()->to('/pages/dtdosen');
    }

    public function delete($id_dosen)
    {
        $this->dosenModel->delete($id_dosen);
        return redirect()->to('/pages/dtdosen');
    }
    // public function dtmatkul()
    // {
    //     $matkul = $this->matkulModel->findAll();
    //     $data = [
    //         'title' => 'Data Mata Kuliah',
    //         'matkul' => $matkul

    //     ];
    //     return view('pages/Matakuliah', $data);
    // }
}
