<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Models\Aboutmodel;

class Admin extends BaseController
{
    protected $adminmodel;
    protected $aboutmodel;
    public function __construct()
    {
        $this->adminmodel = new Adminmodel();
        $this->aboutmodel = new Aboutmodel();
    }
    public function index()
    {
        $data = [
            'title' => 'Artikel'
        ];
        return view('halaman/admin/admin', $data);
    }

    public function view()
    {
        $artikel = $this->adminmodel->findAll();
        $data = [
            'title' => 'Artikel',
            'artikel' => $artikel
        ];

        return view('halaman/admin/artikel', $data);
    }
    public function add()
    {
        session();
        $data = [
            'title' => 'Tambah artikel',
            'validation' => \Config\Services::validation()
        ];
        return view('halaman/admin/tambahdata', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ],
            'lat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi'
                ]
            ],
            'long' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/admin/add/')->withInput()->with('validation', $validation);
            return redirect()->to('/admin/add/')->withInput();
        }

        //ambil gambar
        $filegambar = $this->request->getFile('gambar');
        //pindah gambar ke folder
        $filegambar->move('img');
        // ambil nama file
        $namagambar = $filegambar->getName('');

        $this->adminmodel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'lat' => $this->request->getVar('lat'),
            'long' => $this->request->getVar('long'),
            'gambar' => $namagambar
        ]);

        session()->setFlashdata('pesan', 'Artikel berhasil di post.');
        return redirect()->to('/admin/view/');
    }
    public function delete($id)
    {
        $this->adminmodel->delete($id);
        session()->setFlashdata('pesan', 'Artikel berhasil di hapus.');
        return redirect()->to('/admin/view/');
    }

    public function edit($id)
    {

        $data = [
            'title' => 'Ubah artikel',
            'validation' => \Config\Services::validation(),
            'artikel' => $this->adminmodel->getartikel($id)
        ];
        return view('halaman/admin/edit', $data);
    }
    public function update($id)
    {
        //ambil gambar
        $filegambar = $this->request->getFile('gambar');
        //pindah gambar ke folder
        $filegambar->move('img');
        // ambil nama file
        $namagambar = $filegambar->getName('');

        $this->adminmodel->save([

            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'lat' => $this->request->getVar('lat'),
            'long' => $this->request->getVar('long'),
            'gambar' => $namagambar
        ]);

        session()->setFlashdata('pesan', 'Artikel berhasil di ubah.');
        return redirect()->to('/admin/view/');
    }
    public function about()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM about LIMIT 1');
        foreach ($query->getResultArray() as $row)
            $data = [
                'title' => 'About',
                'about' => $row
            ];

        return view('halaman/admin/about', $data);
    }
    public function editabout($id)
    {
        //dd($this->aboutmodel->getabout($id));
        $data = [
            'title' => 'Ubah artikel',
            'about' => $this->aboutmodel->getabout($id)
        ];
        return view('halaman/admin/editabout', $data);
    }
    public function updateabout($id_about)
    {
        $data = array(
            'about_detail' => $this->request->getVar('about_detail')
        );

        if ($this->aboutmodel->update($id_about, $data)) {
            return redirect()->to('/admin/about/');
        } else {
            echo 'FAIL';
        }
    }
}
