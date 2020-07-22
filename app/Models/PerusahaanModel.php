<?php namespace App\Models;

use CodeIgniter\Model;

class perusahaanModel extends Model
{

	public function tampil_perusahaan(){
		return $hsl=$this->db->get("perusahaan")->result_array();
	}

	public function tampil_perusahaan_by_id($id){
		return $hsl=$this->db->get_where("perusahaan",["id_perusahaan" => $id])->row_array();
	}

	private function hapus_gambar($id)
	{
    $perusahaan = $this->tampil_perusahaan_by_id($id);
    if ($perusahaan['foto'] != "default.jpg") {
	    $filename = explode(".", $lowongan['foto'])[0];
		return array_map('unlink', glob(FCPATH."img/perusahaan/$filename.*"));
    }
	}

	public function hapus_perusahaan($id)
  {
  	$this->hapus_gambar($id);
    $this->db->delete('perusahaan', ['id_perusahaan' => $id]);
  }

	public function update_perusahaan($data){
    $this->db->where('id_perusahaan', $this->input->post('id'));
    $this->db->update('perusahaan', $data);
	}

	public function simpan_perusahaan($data){
		$this->db->insert('perusahaan', $data);
	}

}