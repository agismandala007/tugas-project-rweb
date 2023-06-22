<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('tipe') != 'dosen' && !empty($this->session->userdata()))
        {
            redirect('home');
        }
        else
        {
            $this->load->database();
            $this->load->model('M_dosen');
        }
    }

    function logout ()
    {
        session_destroy();
        redirect('home');
    }

    function index()
    {
        $data['nama'] = $this->M_dosen->getNama($this->session->userdata('email'));
        $data['mahasiswa'] = $this->M_dosen->getMahasiswa($this->session->userdata('email'));
        $this->load->view('view_dosen', $data);
    }
}