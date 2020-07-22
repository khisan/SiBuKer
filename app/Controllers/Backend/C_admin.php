<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data_admin');
		$this->load->model('m_data_alumni');
		$this->load->model('m_data_lowongan');
		$this->load->model('m_data_perusahaan');
		$this->load->model('m_data_kategori');
	}
	
	public function index()
	{
		$data = array(
									'data'  => $this->db->from("alumni")->count_all_results(),
									'data2' => $this->db->from("lowongan")->count_all_results(),
									'data3' => $this->db->from("perusahaan")->count_all_results(),
									'data4' => $this->db->from("kategori")->count_all_results()
								 );
		$this->load->view('administrator/admin/dashboard.php', $data);
	}

	public function data_admin()
	{
		$data['data'] = $this->m_data_admin->tampil_admin();
		$this->load->view('administrator/admin/v_data_admin.php', $data);
		
	}

	public function tambah_admin()
	{
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('telepon', 'Telepon', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('administrator/admin/v_tambah_admin.php');
		} else {
			$nama=$this->input->post('nama');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$telepon=$this->input->post('telepon');
			$email=$this->input->post('email');
			$this->m_data_admin->simpan_admin($nama,$username,$password,$telepon,$email);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_admin/data_admin');
		}
	}

	public function edit_admin($id)
  {
	  $data['admin'] = $this->m_data_admin->tampil_admin_by_id($id);

	  $this->form_validation->set_rules('nama', 'Nama', 'required');
	  $this->form_validation->set_rules('username', 'Username', 'required');
	  $this->form_validation->set_rules('password', 'Password', 'required');
	  $this->form_validation->set_rules('telepon', 'Telepon', 'required');
	  $this->form_validation->set_rules('email', 'E-mail', 'required');

	  if ($this->form_validation->run() == false) {
	      $this->load->view('administrator/admin/v_edit_admin.php', $data);
	  } else {
	  	$nama=$this->input->post('nama');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$telepon=$this->input->post('telepon');
			$email=$this->input->post('email');
      $this->m_data_admin->update_admin();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_admin/data_admin');
	  }
  }

  public function hapus_admin($id)
  {
    $this->m_data_admin->hapus_admin($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_admin/data_admin');
  }

}