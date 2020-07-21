<?php namespace App\Controllers;

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
		return view('index.php', $data);
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
