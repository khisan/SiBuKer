<?php namespace App\Models;

use CodeIgniter\Model;

class lowonganModel extends Model
{
	public function tampil_lowongan(){
		$builder = $this->db->table('lowongan');
		$builder->select('*');
		// $builder->join('kategori', 'kategori.id_kategori = lowongan.id_kategori');
		$builder->join('kategori', 'kategori.id_kategori = lowongan.id_kategori');
		$builder->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan');
		return $builder->get();
	}

	// public function tampil_lowongan_by_kategori_dis(){
	// 	$this->db->join('kategori', 'kategori.id_kategori = lowongan.id_kategori');
	// 	$this->db->distinct();
 //    $this->db->select('status_lowongan');
 //    $this->db->group_by('status_lowongan'); 
 //    $query = $this->db->get('lowongan');
 //    return $query->result_array();
	// }

	// public function get_bulan()
	// {
	// 	$this->db->select('MONTH(batas_akhir) as bulan');
 //    $this->db->from('lowongan');
 //    $this->db->distinct();
 //    $query = $this->db->get();
 //    return $query->result();
	// }

	// public function get_status()
	// {
	// 	$this->db->select('status_lowongan');
 //    $this->db->from('lowongan');
 //    $this->db->distinct();
 //    $query = $this->db->get();
 //    return $query->result();
	// }

	// public function getlaporan($bulan,$status)
	// {
	// 	// $this->db->select('*');
	// 	// $this->db->from('lowongan');
	// 	$this->db->join('kategori', 'kategori.id_kategori = lowongan.id_kategori');
	// 	$this->db->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan');
	// 	$this->db->distinct();
	// 	if($status!='' && $bulan!=''){
	// 		$this->db->where('status_lowongan = "'.$status.'" and MONTH(batas_akhir) = "'.$bulan.'"');
	// 	} else if($status=='' && $bulan!=''){
	// 		$this->db->where('MONTH(batas_akhir)', $bulan);
	// 	} else if($status!='' && $bulan==''){
	// 		$this->db->where('status_lowongan', $status);
	// 	}
	// 	return $rs = $this->db->get('lowongan')->result_array();

	// }

	// public function tampil_lowongan_by_id($id){
	// 	$this->db->join('kategori', 'kategori.id_kategori = lowongan.id_kategori');
	// 	$this->db->join('perusahaan', 'perusahaan.id_perusahaan = lowongan.id_perusahaan');
	// 	return $hsl=$this->db->get_where("lowongan",["id_lowongan" => $id])->row_array();
	// }

	// private function hapus_gambar($id)
	// {
 //    $lowongan = $this->tampil_lowongan_by_id($id);
 //    if ($lowongan['gambar'] != "default.jpg") {
	//     $filename = explode(".", $lowongan['gambar'])[0];
	// 	return array_map('unlink', glob(FCPATH."img/lowongan/$filename.*"));
 //    }
	// }

	// public function hapus_lowongan($id)
 //  {
	//   $this->hapus_gambar($id);
 //    $this->db->delete('lowongan', ['id_lowongan' => $id]);
 //  }

	// public function update_lowongan($data){
 //    $this->db->where('id_lowongan', $this->input->post('id'));
 //    $this->db->update('lowongan', $data);
	// }

	// public function simpan_lowongan($data){
 //    $this->db->set('tanggal_posting', 'NOW()', FALSE);
	// 	$this->db->insert('lowongan', $data);
	// }

}