<?php namespace App\Controllers;

class Home extends BaseController
{

	public function __construct()
	{
		$this->dataLowongan = new DataLowongan();
	}

	public function index()
	{
		$data['data'] = $this->m_data_lowongan->tampil_lowongan();
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
