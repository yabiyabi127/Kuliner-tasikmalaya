<?php

namespace App\Models;

use CodeIgniter\Model;

class Homemodel extends Model
{
    protected $table = 'post_artikel';

    public function getartikel()
    {
        return $this->findAll();
    }
}
