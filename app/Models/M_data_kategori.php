<?php
class M_data_kategori extends CI_Model{

	public function tampil_kategori(){
		return $hsl=$this->db->get("kategori")->result_array();
	}

	public function tampil_kategori_by_id($id){
		return $hsl=$this->db->get_where("kategori",["id_kategori" => $id])->row_array();
	}

	public function hapus_kategori($id)
    {
        $this->db->delete('kategori', ['id_kategori' => $id]);
    }

	public function update_kategori(){
		$data = [
	    "nama_kategori" => $this->input->post('nama_kategori', true)
    ];
    $this->db->where('id_kategori', $this->input->post('id'));
    $this->db->update('kategori', $data);
	}

	public function simpan_kategori(){
		$data = [
	    "nama_kategori" => $this->input->post('nama_kategori', true)
    ];
		$this->db->insert('kategori', $data);
	}

}