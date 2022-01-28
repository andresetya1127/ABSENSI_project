<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id_matkul';
    protected $useTimestamp = true;
    protected $allowedFields = ['id_matkul', 'nama_matkul'];
}
