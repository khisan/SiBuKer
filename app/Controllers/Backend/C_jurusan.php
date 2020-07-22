<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jurusan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data_jurusan');
	}
	
	public function index()
	{
		$this->load->view('administrator/admin/dashboard.php');
	}

	public function data_jurusan()
	{
		$data['data'] = $this->m_data_jurusan->tampil_jurusan();
		$this->load->view('administrator/admin/v_data_jurusan.php', $data);
		
	}

	public function tambah_jurusan()
	{
    $this->form_validation->set_rules('nama_jurusan', 'Nama jurusan', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('administrator/admin/v_tambah_jurusan.php');
		} else {
			$nama=$this->input->post('nama_jurusan');
			$this->m_data_jurusan->simpan_jurusan($nama);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_jurusan/data_jurusan');
		}
	}

	public function edit_jurusan($id)
  {
	  $data['jurusan'] = $this->m_data_jurusan->tampil_jurusan_by_id($id);
	  $data['data_jr'] = $this->m_data_jurusan->tampil_jurusan();
	  $this->form_validation->set_rules('nama_jurusan', 'Nama jurusan', 'required');
	  if ($this->form_validation->run() == false) {
	      $this->load->view('administrator/admin/v_edit_jurusan.php', $data);
	  } else {
	  	$nama=$this->input->post('nama_jurusan');
      $this->m_data_jurusan->update_jurusan();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_jurusan/data_jurusan');
	  }
  }

  public function hapus_jurusan($id)
  {
    $this->m_data_jurusan->hapus_jurusan($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_jurusan/data_jurusan');
  }

}