<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('M_mahasiswa');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['data'] = $this->M_mahasiswa->dataMahasiswa();
		$this->load->view('view_home', $data);
	}

	public function cari()
	{
		$nama = $this->input->post('cariNama');
		$data['data'] = $this->M_mahasiswa->cariMahasiswa($nama);

		$this->load->view('view_home', $data);
	}
}
