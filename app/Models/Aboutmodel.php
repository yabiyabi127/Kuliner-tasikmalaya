<?php

namespace App\Models;

use CodeIgniter\Model;

class Aboutmodel extends Model
{
    protected $table = 'about';
    protected $allowedFields = ['about_detail'];

    public function getabout($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
