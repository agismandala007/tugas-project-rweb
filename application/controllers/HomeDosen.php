<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_dosen');

        if($this->session->userdata('tipe') != 'dosen')
        {
            redirect('home');
        }
    }

    function index()
    {
        // echo $this->session->userdata('email');
        $data['mahasiswa'] = $this->M_dosen->getMahasiswa($this->session->userdata('email'));
        $this->load->view('view_dosen', $data);
    }
}