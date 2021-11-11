<?php

namespace App\Controllers;

use App\Models\Halamanmodel;

class Halaman extends BaseController
{
    protected $halamanmodel;
    public function __construct()
    {
        $this->halamanmodel = new Halamanmodel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home |Kuliner Tasikmalaya'
        ];
        return view('halaman/home', $data);
    }

    public function about()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM about LIMIT 1');
        foreach ($query->getResultArray() as $row)
            $data = [
                'title' => 'Home |Kuliner Tasikmalaya',
                'single' => $row
            ];
        return view('halaman/about', $data);
    }
}
