<?php namespace App\Controllers\Backend;

use App\Models\AdminModel;
use App\Models\AlumniModel;
use App\Models\LowonganModel;
use App\Models\PerusahaanModel;
use App\Models\KategoriModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
	public function __construct(){
		$this->adminModel= new adminModel();
		$this->alumniModel= new alumniModel();
		$this->lowonganModel= new lowonganModel();
		$this->perusahaanModel= new perusahaanModel();
		$this->kategoriModel= new kategoriModel();
	}
	
	public function index()
	{
		$db = \Config\Database::connect();
		$data = array(
									'data'  => $db->table('alumni')->countAllResults(),
									'data2' => $db->table('lowongan')->countAllResults(),
									'data3' => $db->table('perusahaan')->countAllResults(),
									'data4' => $db->table('kategori')->countAllResults()
								 );
		return view('Backend/dashboard.php', $data);
	}

	public function data_admin()
	{
		$data['data'] = $this->m_data_admin->tampil_admin();
		return view('Backend/v_data_admin.php', $data);
		
	}

	public function tambah_admin()
	{
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('telepon', 'Telepon', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required');
		if ($this->form_validation->run() == false) {
			return view('administrator/admin/v_tambah_admin.php');
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
	      return view('administrator/admin/v_edit_admin.php', $data);
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