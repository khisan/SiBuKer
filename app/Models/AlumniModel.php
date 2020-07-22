<?php namespace App\Models;

use CodeIgniter\Model;

class alumniModel extends Model
{
	
  public function tampil_alumni(){
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
		return $hsl=$this->db->get("alumni")->result_array();
	}

	public function tampil_alumni_by_id($id){
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
		return $hsl=$this->db->get_where("alumni",["id_alumni" => $id])->row_array();
	}

  public function get_jurusan()
  {
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->distinct();
    $query = $this->db->get();
    return $query->result();
  }

  public function getlaporan($jurusan)
  {
    $this->db->where('nama_jurusan',$jurusan);
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    return $this->db->get('alumni')->result_array();
  }

	public function hapus_alumni($id)
  {
      $this->db->delete('alumni', ['id_alumni' => $id]);
  }

	public function update_alumni(){
		$data = 
		[
      "nama" => $this->input->post('nama', true),
      "tempat_lahir" => $this->input->post('tempat_lahir', true),
      "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
      "alamat" => $this->input->post('alamat', true),
      "email" => $this->input->post('email', true),
      "id_jurusan" => $this->input->post('jurusan', true),
      "tahun_lulus" => $this->input->post('tahun_lulus', true),
      "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
    ];
    $this->db->where('id_alumni', $this->input->post('id'));
    $this->db->update('alumni', $data);
	}

	public function simpan_alumni(){
		$data = 
		[
      "nama" => $this->input->post('nama', true),
      "tempat_lahir" => $this->input->post('tempat_lahir', true),
      "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
      "alamat" => $this->input->post('alamat', true),
      "email" => $this->input->post('email', true),
      "jurusan" => $this->input->post('jurusan', true),
      "tahun_lulus" => $this->input->post('tahun_lulus', true),
      "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
    ];
    $this->db->insert('alumni', $data);
	}

}