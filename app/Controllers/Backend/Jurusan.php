<?php namespace App\Controllers\Backend;

use App\Models\JurusanModel;
use CodeIgniter\Controller;

class Jurusan extends Controller
{

	protected $jurusanModel;
	public function __construct(){
		$this->jurusanModel= new JurusanModel();
	}
	
	public function index()
	{
		$data['data'] = $this->jurusanModel->tampil_jurusan();
		return view('Backend/v_data_jurusan', $data);
	}

	public function data_jurusan()
	{
		$data = $this->jurusanModel->tampil_jurusan();
		echo json_encode($data);
		//return view('Backend/v_data_jurusan', $data);
	}

	public function simpan_jurusan()
	{
			$data = $this->jurusanModel->save([
				'nama_jurusan' => $this->request->getVar('nama_jurusan')
			]);
			echo json_encode($data);
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