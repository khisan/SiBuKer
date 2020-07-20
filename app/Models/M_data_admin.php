<?php
class M_data_admin extends CI_Model{

	public function tampil_admin(){
		return $hsl=$this->db->get("admin")->result_array();
	}

	public function tampil_admin_by_id($id){
		return $hsl=$this->db->get_where("admin",["id_admin" => $id])->row_array();
	}

	public function hapus_admin($id)
    {
        $this->db->delete('admin', ['id_admin' => $id]);
    }

	public function update_admin(){
		$data = [
	    "nama" => $this->input->post('nama', true),
	    "username" => $this->input->post('username', true),
	    "password" => $this->input->post('password', true),
	    "telepon" => $this->input->post('telepon', true),
	    "email" => $this->input->post('email', true)
    ];
    $this->db->where('id_admin', $this->input->post('id'));
    $this->db->update('admin', $data);
	}

	public function simpan_admin(){
		$data = [
	    "nama" => $this->input->post('nama', true),
	    "username" => $this->input->post('username', true),
	    "password" => $this->input->post('password', true),
	    "telepon" => $this->input->post('telepon', true),
	    "email" => $this->input->post('email', true)
    ];
		$this->db->insert('admin', $data);
	}

}