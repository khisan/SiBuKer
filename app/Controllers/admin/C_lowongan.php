<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lowongan extends CI_Controller { 

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data_lowongan');
		$this->load->model('m_data_kategori');
		$this->load->model('m_data_perusahaan');
	}
	
	public function index()
	{
		$this->load->view('administrator/admin/dashboard.php');
	}

	public function data_lowongan()
	{
		$data['bulan_indo'] = array(
	    '01' => 'JANUARI',
	    '02' => 'FEBRUARI',
	    '03' => 'MARET',
	    '04' => 'APRIL',
	    '05' => 'MEI',
	    '06' => 'JUNI',
	    '07' => 'JULI',
	    '08' => 'AGUSTUS',
	    '09' => 'SEPTEMBER',
	    '10' => 'OKTOBER',
	    '11' => 'NOVEMBER',
	    '12' => 'DESEMBER',
        );
		$data['data'] = $this->m_data_lowongan->tampil_lowongan();
		$data['bulan'] = $this->m_data_lowongan->get_bulan();
		$data['status'] = $this->m_data_lowongan->get_status();
		$this->load->view('administrator/admin/v_data_lowongan.php', $data);
	}

	 public function tabel_lowongan_filter()
    {
      // die(phpversion());
      // $mpdf = new \Mpdf\Mpdf();
      $bulan = $this->input->post('bulan');
      // die(var_dump($tujuan));
      $status = $this->input->post('status');
      $data['data'] = $this->m_data_lowongan->getlaporan($bulan,$status);
      $this->load->view('administrator/admin/v_data_lowongan_filter.php', $data); 
      // $mpdf->WriteHTML($html);
      // $mpdf->Output();
    }

	public function nonaktif_lowongan()
	{
		$id = array();

		$id = $this->input->post('pilih');

		$object = array('status_lowongan' => 'nonaktif');

		for($i=0;$i<count($id);$i++){

			$this->query = $this->db
							->where('id_lowongan', $id[$i])
							->update('lowongan', $object);
		}
		redirect('admin/c_lowongan/data_lowongan');
	}

	private function upload_gambar()
	{
		$config['upload_path'] 		= './img/lowongan/';
		$config['allowed_types'] 	= 'jpg|png';
		$config['file_name'] 		= 'low'.date('YmdHis');
		$config['max_size']  		= '10000000';
		$config['overwrite'] 		= TRUE;
	
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('gambar')){
			return $this->upload->data("file_name");
		}
	}

	public function tambah_lowongan()
	{
		$data['kategori'] = $this->m_data_kategori->tampil_kategori();
		$data['perusahaan'] = $this->m_data_perusahaan->tampil_perusahaan();
    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('batas_akhir', 'Batas Akhir', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('gaji', 'Gaji', 'required');
    $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('administrator/admin/v_tambah_lowongan.php', $data);
		} else {
			$data = array(
				'id_kategori'			=> $this->input->post('kategori') ,
				'nama_perusahaan'	=> $this->input->post('perusahaan') ,
				'judul'						=> $this->input->post('judul'),
				'batas_akhir'			=> $this->input->post('batas_akhir'),
				'status_lowongan'	=> $this->input->post('status_lowongan'),
				'deskripsi'				=> $this->input->post('deskripsi'),
				'gaji'						=> $this->input->post('gaji') ,
				'lokasi'					=> $this->input->post('lokasi') ,
				'gambar'					=> $this->upload_gambar()
      );

			$this->m_data_lowongan->simpan_lowongan($data);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/c_lowongan/data_lowongan');
		}
	}

	public function edit_lowongan($id)
  {
  	$data['status_lowongan'] = ['aktif', 'nonaktif'];
  	$data['perusahaan'] = $this->m_data_perusahaan->tampil_perusahaan();
  	$data['lowongan'] = $this->m_data_lowongan->tampil_lowongan_by_id($id);
  	$data['kategori'] = $this->m_data_kategori->tampil_kategori();
  	$this->form_validation->set_rules('judul', 'Judul', 'required');
  	$this->form_validation->set_rules('batas_akhir', 'Judul', 'required');
  	$this->form_validation->set_rules('deskripsi', 'Judul', 'required');
  	$this->form_validation->set_rules('gaji', 'Judul', 'required');
  	$this->form_validation->set_rules('lokasi', 'Judul', 'required');

	  if ($this->form_validation->run() == false) {
	    $this->load->view('administrator/admin/v_edit_lowongan.php', $data);
	  } else {
	  	$kategori=$this->input->post('kategori');
	  	$perusahaan=$this->input->post('perusahaan');
			$judul=$this->input->post('judul');
			$batas_akhir=$this->input->post('batas_akhir');
			$status_lowongan=$this->input->post('status_lowongan');
			$deskripsi=$this->input->post('deskripsi');
			$gaji=$this->input->post('gaji');
			$gambar=$_FILES['userfile']['name'];

			if($gambar)
				$config['upload_path'] 		= './img/lowongan/';
				$config['allowed_types'] 	= 'jpg|png';
				$config['file_name'] 		= 'low'.date('YmdHis');
				$config['max_size']  		= '10000000';
				$config['overwrite'] 		= TRUE;
			
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('userfile')){
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else{
					echo('Gagal Update');
				}

				$data = array(
				'id_kategori'			=> $this->input->post('kategori') ,
				'id_perusahaan'	=> $this->input->post('perusahaan') ,
				'judul'						=> $this->input->post('judul'),
				'batas_akhir'			=> $this->input->post('batas_akhir'),
				'status_lowongan'	=> $this->input->post('status_lowongan'),
				'deskripsi'				=> $this->input->post('deskripsi'),
				'gaji'						=> $this->input->post('gaji') ,
				'lokasi'					=> $this->input->post('lokasi')
      	);

      $this->m_data_lowongan->update_lowongan($data);
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('admin/c_lowongan/data_lowongan');
	  }
  }

  public function hapus_lowongan($id)
  {
    $this->m_data_lowongan->hapus_lowongan($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('admin/c_lowongan/data_lowongan');
  }

  public function detail_lowongan($id)
  {
    $data['lowongan'] = $this->m_data_lowongan->tampil_lowongan_by_id($id);
    $this->load->view('administrator/admin/v_detail_lowongan',$data);
  }

}