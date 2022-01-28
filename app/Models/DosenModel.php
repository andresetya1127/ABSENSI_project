<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $returnType = 'object';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_dosen', 'nama_dosen', 'nidn', 'no_hp', 'alamat', 'id_matkul'];

    function getAll()
    {
        $builder = $this->db->table('dosen');
        $builder->join('matkul', 'matkul.id_matkul = dosen.id_matkul');
        $query = $builder->get();
        return $query->getResult();
    }
}
