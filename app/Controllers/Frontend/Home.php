<?php namespace App\Controllers\Frontend;

use App\Models\LowonganModel;
use CodeIgniter\Controller;

class Home extends Controller
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
		return view('Frontend/daftar.php');
	}

	public function login()
	{
		return view('Frontend/login.php');
	}
}
