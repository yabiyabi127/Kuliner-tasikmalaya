<?php

namespace App\Controllers;

use App\Models\Singleartikelmodel;

class Singleartikel extends BaseController
{
    protected $singleartikelmodel;
    public function __construct()
    {
        $this->singleartikelmodel = new Singleartikelmodel();
    }
    public function index()
    {
    }

    public function detail($id)
    {
        $artikel = $this->singleartikelmodel->where(['id' => $id])->first();
        $data = [
            'title' => 'Home |Kuliner Tasikmalaya',
            'artikel' => $artikel

        ];
        return view('halaman/singleartikel', $data);
    }
}
