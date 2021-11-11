<?php

namespace App\Controllers;

use App\Models\Homemodel;

class Home extends BaseController
{
	protected $homemodel;
	public function __construct()
	{
		$this->homemodel = new Homemodel();
	}
	public function index()
	{

		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM post_artikel LIMIT 3');
		foreach ($query->getResultArray() as $row)
			$data = [
				'title' => 'Home |Kuliner Tasikmalaya',
				'artikel' => $this->homemodel->getartikel(),
				'single' => $row
			];

		return view('halaman/home', $data);
	}
}
