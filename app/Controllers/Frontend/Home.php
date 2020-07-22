<?php namespace App\Controllers\Frontend;

use CodeIgniter\Controller;
use App\Models\LowonganModel;

class Home extends BaseController
{

	public function __construct()
	{
		$this->lowonganModel= new lowonganModel();
	}

	public function index()
	{
		$data['data'] = $this->lowonganModel->tampil_lowongan()->getResultArray();
		return view('Frontend/index.php', $data);
	}

	public function daftar()
	{
		return view('daftar.php');
	}

	public function login()
	{
		return view('login.php');
	}
}
