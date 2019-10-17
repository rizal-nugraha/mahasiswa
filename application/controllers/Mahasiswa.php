<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mmahasiswa');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mmahasiswa->tampil_mahasiswa();
		$this->load->view('vmahasiswa',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'nrp' => $this->input->post("nrp"),
			'nama' => $this->input->post("nama"),
			'ipk' => $this->input->post("ipk"),
		);
		$this->Mmahasiswa->tambah_data($insert);
		redirect('Mahasiswa/tampil');
	}

	public function delete_data($nrp){
		$this->Mmahasiswa->delete_data($nrp);
		redirect('Mahasiswa/tampil');
	}
}
