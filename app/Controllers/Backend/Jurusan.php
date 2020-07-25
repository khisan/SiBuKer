<?php namespace App\Controllers\Backend;

use App\Models\JurusanModel;
use CodeIgniter\Controller;

class Jurusan extends Controller
{

	public function __construct(){
		$this->jurusanModel= new jurusanModel();
	}
	
	public function index()
	{
		return view('Backend/dashboard');
	}

	public function data_jurusan()
	{
		$data['data'] = $this->jurusanModel->tampil_jurusan();
		return view('Backend/v_data_jurusan', $data);
		
	}

	public function tambah_jurusan()
	{
    $this->form_validation->set_rules('nama_jurusan', 'Nama jurusan', 'required');
		if ($this->form_validation->run() == false) {
			return view('Backend/v_tambah_jurusan');
		} else {
			$nama=$this->input->post('nama_jurusan');
			$this->jurusanModel->simpan_jurusan($nama);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_jurusan/data_jurusan');
		}
	}

	public function edit_jurusan($id)
  {
	  $data['jurusan'] = $this->jurusanModel->tampil_jurusan_by_id($id);
	  $data['data_jr'] = $this->jurusanModel->tampil_jurusan();
	  $this->form_validation->set_rules('nama_jurusan', 'Nama jurusan', 'required');
	  if ($this->form_validation->run() == false) {
	      return view('Backend/v_edit_jurusan', $data);
	  } else {
	  	$nama=$this->input->post('nama_jurusan');
      $this->jurusanModel->update_jurusan();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_jurusan/data_jurusan');
	  }
  }

  public function hapus_jurusan($id)
  {
    $this->jurusanModel->hapus_jurusan($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_jurusan/data_jurusan');
  }

}