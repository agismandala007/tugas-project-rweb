<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('M_registrasi');
    }

    function index()
    {
        $data['data']= $this->M_registrasi->dosen();
        // $data['dosen'] = $this->M_registrasi->dosen();
        $this->load->view('view_registrasi', $data);
    }

    function add() 
    {
        $akun = array(
            'nim' => $this->input->post('inputNim'),
            'nama' => $this->input->post('inputNama'),
            'email' => $this->input->post('inputEmail'),
            'password' => $this->input->post('inputPassword')
        );
    }
}
