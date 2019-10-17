<?php

class Mmahasiswa extends CI_Model{

	public function tampil_mahasiswa(){
		$query = $this->db->get("mahasiswa");
		return $query->result();
	}

	public function tambah_data($data){
		$this->db->insert("mahasiswa",$data);
	}

	public function delete_data($nrp){
		$this->db->where("nrp",$nrp);
		$this->db->delete("mahasiswa");
	}
}
