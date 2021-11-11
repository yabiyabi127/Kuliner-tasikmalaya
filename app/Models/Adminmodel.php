<?php

namespace App\Models;

use CodeIgniter\Model;

class Adminmodel extends Model
{
    protected $table = 'post_artikel';
    protected $allowedFields = ['judul', 'deskripsi', 'gambar', 'lat', 'long'];

    public function getartikel($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
