<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data_kategori');
	}
	
	public function index()
	{
		$this->load->view('administrator/admin/dashboard.php');
	}

	public function data_kategori()
	{
		$data['data'] = $this->m_data_kategori->tampil_kategori();
		$this->load->view('administrator/admin/v_data_kategori.php', $data);
		
	}

	public function tambah_kategori()
	{
    $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('administrator/admin/v_tambah_kategori.php');
		} else {
			$nama=$this->input->post('nama_kategori');
			$this->m_data_kategori->simpan_kategori($nama);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_kategori/data_kategori');
		}
	}

	public function edit_kategori($id)
  {
	  $data['kategori'] = $this->m_data_kategori->tampil_kategori_by_id($id);
	  $data['data_kt'] = $this->m_data_kategori->tampil_kategori();
	  $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
	  if ($this->form_validation->run() == false) {
	      $this->load->view('administrator/admin/v_edit_kategori.php', $data);
	  } else {
	  	$nama=$this->input->post('nama_kategori');
      $this->m_data_kategori->update_kategori();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_kategori/data_kategori');
	  }
  }

  public function hapus_kategori($id)
  {
    $this->m_data_kategori->hapus_kategori($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_kategori/data_kategori');
  }

}