<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_perusahaan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data_perusahaan');
	}
	
	public function index()
	{
		$this->load->view('administrator/admin/dashboard.php');
	}

	public function data_perusahaan()
	{
		$data['data'] = $this->m_data_perusahaan->tampil_perusahaan();
		$this->load->view('administrator/admin/v_data_perusahaan.php', $data);
	}

	private function upload_gambar()
	{

		$config['upload_path'] 		= './img/perusahaan/';
		$config['allowed_types'] 	= 'jpg|png';
		$config['file_name'] 		= 'perusahaan'.uniqid();
		$config['max_size']  		= '10000000';
		$config['overwrite'] 		= TRUE;
	
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')){
			return $this->upload->data("file_name");
		}
	}

	public function tambah_perusahaan()
	{
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('website', 'Website', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('administrator/admin/v_tambah_perusahaan.php');
		} else {
			$data = array(
				'nama'			=> $this->input->post('nama') ,
				'alamat'		=> $this->input->post('alamat'),
				'website'		=> $this->input->post('website'),
				'deskripsi'	=> $this->input->post('deskripsi'),
				'foto'		=> $this->upload_gambar()
      );
			$this->m_data_perusahaan->simpan_perusahaan($data);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_perusahaan/data_perusahaan');
		}
	}

	public function edit_perusahaan($id)
  {
	  $data['perusahaan'] = $this->m_data_perusahaan->tampil_perusahaan_by_id($id);
	  $data['data_psh'] = $this->m_data_perusahaan->tampil_perusahaan();

	  $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('website', 'Website', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

	  if ($this->form_validation->run() == false) {
	      $this->load->view('administrator/admin/v_edit_perusahaan.php', $data);
	  } else {
	  	$nama=$this->input->post('nama');
			$alamat=$this->input->post('alamat');
			$website=$this->input->post('website');
			$deskripsi=$this->input->post('deskripsi');
			$foto=$_FILES['userfile']['name'];

			if($foto)
				$config['upload_path'] 		= './img/perusahaan/';
				$config['allowed_types'] 	= 'jpg|png';
				$config['file_name'] 		= 'perusahaan'.$this->$id;
				$config['max_size']  		= '10000000';
				$config['overwrite'] 		= TRUE;
			
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('userfile')){
					$foto = $this->upload->data('file_name');
				$this->db->set('gambar', $foto);
				}else{
					echo('Gagal Update');
				}

				$data = array(
				'nama'			=> $this->input->post('nama'),
				'alamat'		=> $this->input->post('alamat'),
				'website'		=> $this->input->post('website'),
				'deskripsi'	=> $this->input->post('deskripsi') 
      	);
      $this->m_data_perusahaan->update_perusahaan($data);
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_perusahaan/data_perusahaan');
	  }
  }

  public function hapus_perusahaan($id)
  {
    $this->m_data_perusahaan->hapus_perusahaan($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_perusahaan/data_perusahaan');
  }

  public function detail_perusahaan($id)
  {
    $data['perusahaan'] = $this->m_data_perusahaan->tampil_perusahaan_by_id($id);
    $this->load->view('administrator/admin/v_detail_perusahaan',$data);
  }

}