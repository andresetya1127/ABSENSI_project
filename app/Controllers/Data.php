<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\DataModel;
use PhpParser\Node\Stmt\Else_;

class Data extends BaseController
{

    protected $dataModel;
    protected $validation;

    public function __construct()
    {
        $this->dataModel = new DataModel();
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {

        $data = [
            'controller'        => 'data',
            'title'             => 'Data Mahasiswa'
        ];

        return view('pages/data', $data);
    }

    public function getAll()
    {
        $response = array();

        $i = 1;
        $data['data'] = array();

        $result = $this->dataModel->select('id, nim, nama, alamat, tgl_lahir, no_hp, status')->findAll();

        foreach ($result as $key => $value) {
            $bg = '';
            if ($value->status == 'Aktif')
                $bg = 'bg-success';
            elseif ($value->status == 'Cuti')
                $bg = 'bg-secondary';
            else
                $bg = 'bg-danger';

            $ops = '<div class="btn-group">';
            $ops .= '	<button type="button" class="btn btn-outline-info" onclick="edit(' . $value->id . ')"><i class="bi bi-pencil-square"></i></button>';
            $ops .= '	<button type="button" class="btn btn-outline-danger" onclick="remove(' . $value->id . ')"><i class="bi bi-trash-fill"></i></button>';
            $ops .= '</div>';
            $status = "<div class='$bg p-1 text-light'>$value->status</div>";

            $data['data'][$key] = array(
                // $value->id,
                $i++,
                $value->nim,
                $value->nama,
                $value->alamat,
                $value->tgl_lahir,
                $value->no_hp,
                $status,
                $ops,
            );
        }

        return $this->response->setJSON($data);
    }

    public function getOne()
    {
        $response = array();

        $id = $this->request->getPost('id');

        if ($this->validation->check($id, 'required|numeric')) {

            $data = $this->dataModel->where('id', $id)->first();

            return $this->response->setJSON($data);
        } else {

            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
    }

    public function add()
    {

        $response = array();

        $fields['id'] = $this->request->getPost('id');
        $fields['nim'] = $this->request->getPost('nim');
        $fields['nama'] = $this->request->getPost('nama');
        $fields['alamat'] = $this->request->getPost('alamat');
        $fields['tgl_lahir'] = $this->request->getPost('tglLahir');
        $fields['no_hp'] = $this->request->getPost('noHp');
        $fields['status'] = $this->request->getPost('status');


        $this->validation->setRules([
            'nim' => ['label' => 'Nim', 'rules' => 'required|max_length[11]'],
            'nama' => ['label' => 'Nama', 'rules' => 'required|max_length[150]'],
            'alamat' => ['label' => 'Alamat', 'rules' => 'required|max_length[150]'],
            'tgl_lahir' => ['label' => 'Tgl lahir', 'rules' => 'permit_empty|valid_date'],
            'no_hp' => ['label' => 'No hp', 'rules' => 'required|numeric|max_length[13]'],
            'status' => ['select' => 'Status', 'rules' => 'required|max_length[20]'],
        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
        } else {

            if ($this->dataModel->insert($fields)) {

                $response['success'] = true;
                $response['messages'] = 'Data Berhasil Disimpan !';
            } else {

                $response['success'] = false;
                $response['messages'] = 'Gagal Mennyimpan !';
            }
        }

        return $this->response->setJSON($response);
    }

    public function edit()
    {

        $response = array();

        $fields['id'] = $this->request->getPost('id');
        $fields['nim'] = $this->request->getPost('nim');
        $fields['nama'] = $this->request->getPost('nama');
        $fields['alamat'] = $this->request->getPost('alamat');
        $fields['tgl_lahir'] = $this->request->getPost('tglLahir');
        $fields['no_hp'] = $this->request->getPost('noHp');
        $fields['status'] = $this->request->getPost('status');


        $this->validation->setRules([
            'nim' => ['label' => 'Nim', 'rules' => 'required|max_length[11]'],
            'nama' => ['label' => 'Nama', 'rules' => 'required|max_length[150]'],
            'alamat' => ['label' => 'Alamat', 'rules' => 'required|max_length[150]'],
            'tgl_lahir' => ['label' => 'Tgl lahir', 'rules' => 'permit_empty|valid_date'],
            'no_hp' => ['label' => 'No hp', 'rules' => 'required|max_length[13]'],
            'status' => ['label' => 'Status', 'rules' => 'required|max_length[20]'],
        ]);

        if ($this->validation->run($fields) == FALSE) {

            $response['success'] = false;
            $response['messages'] = $this->validation->listErrors();
        } else {

            if ($this->dataModel->update($fields['id'], $fields)) {

                $response['success'] = true;
                $response['messages'] = 'Berhasil Di Update !';
            } else {

                $response['success'] = false;
                $response['messages'] = 'Update error!';
            }
        }

        return $this->response->setJSON($response);
    }

    public function remove()
    {
        $response = array();

        $id = $this->request->getPost('id');

        if (!$this->validation->check($id, 'required|numeric')) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        } else {

            if ($this->dataModel->where('id', $id)->delete()) {

                $response['success'] = true;
                $response['messages'] = 'Hapus Data Berhsil.';
            } else {

                $response['success'] = false;
                $response['messages'] = 'Hapus Data Gagal !';
            }
        }

        return $this->response->setJSON($response);
    }
}
