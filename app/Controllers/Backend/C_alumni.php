<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_alumni extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data_alumni');
		$this->load->model('m_data_jurusan');
	}
	
	public function index()
	{
		$data['data'] = $this->db->from("alumni")->count_all_results();
		$this->load->view('administrator/admin/dashboard.php', $data);
	}

	public function data_alumni()
	{
		$data['data'] = $this->m_data_alumni->tampil_alumni();
		$data['jurusan'] = $this->m_data_alumni->get_jurusan();
		$this->load->view('administrator/admin/v_data_alumni.php', $data);
	}

	public function alumni_filter()
    {
      $jurusan = $this->input->post('jurusan');
      $data['data'] = $this->m_data_alumni->getlaporan($jurusan);
      $this->load->view('administrator/admin/v_data_alumni_filter.php',$data);
    }

	public function tambah_alumni()
	{
		$data['jurusan'] = $this->m_data_jurusan->tampil_jurusan();
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|callback_select_validate');
    $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('administrator/admin/v_tambah_alumni.php', $data);
		} else {
			$nama=$this->input->post('nama');
			$tempat_lahir=$this->input->post('tempat_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$alamat=$this->input->post('alamat');
			$email=$this->input->post('email');
			$jurusan=$this->input->post('jurusan');
			$tahun_lulus=$this->input->post('tahun_lulus');
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$this->m_data_alumni->simpan_alumni($nama,$tempat_lahir,$tanggal_lahir,$alamat,$email,$jurusan,$tahun_lulus,$jenis_kelamin);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_alumni/data_alumni');
		}
	}

	// public function select_validate($select)
	// 	{
	// 		// 'none' is the first option that is default "-------Choose City-------"
	// 		if($select=="none")
	// 		{
	// 			$this->form_validation->set_message('select_validate', 'Pilih Jurusan.');
	// 			return false;
	// 		} else{
	// 			// User picked something.
	// 			return true;
	// 		}
	// 	}	

	public function edit_alumni($id)
  {
	  $data['alumni'] = $this->m_data_alumni->tampil_alumni_by_id($id);
	  $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan'];
	  $data['jurusan'] = $this->m_data_jurusan->tampil_jurusan();

	  $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
    $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

	  if ($this->form_validation->run() == false) {
	      $this->load->view('administrator/admin/v_edit_alumni.php', $data);
	  } else {
      $this->m_data_alumni->update_alumni();
      $this->session->set_flashdata('flash', 'Diubah');
	    redirect('admin/c_alumni/data_alumni');
	  }
  }

  public function hapus_alumni($id)
  {
    $this->m_data_alumni->hapus_alumni($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_alumni/data_alumni');
  }

  public function detail_alumni($id)
  {
    $data['alumni'] = $this->m_data_alumni->tampil_alumni_by_id($id);
    $this->load->view('administrator/admin/v_detail_alumni',$data);
  }

}