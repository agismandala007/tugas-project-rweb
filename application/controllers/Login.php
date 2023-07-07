<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('M_login');
    }


    function index()
    {
        $this->load->view('view_login');
    }

    function validasi()
    {
        $akun = array(
            'email' => $this->input->post('inputEmail'),
            'password' => $this->input->post('inputPassword')
        );

        $this->form_validation->set_rules('inputEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputPassword', 'Password', 'required');

        if ($this->form_validation->run() != false) 
        {
            $data = $this->M_login->verify($akun['email'], $akun['password']);
            if ($data) 
            {
                // $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('email', $data['email']);
                $this->session->set_userdata('tipe', $data['tipe']);

                if($this->session->userdata('tipe') == 'dosen')
                {
                    redirect('HomeDosen');
                }
                elseif($this->session->userdata('tipe') == 'mahasiswa')
                {
                    redirect('HomeMahasiswa');
                }
                
            } 
            else 
            {
                session_destroy();
                echo "<script>alert('Email atau Password salah!!'); window.location.href = '" . base_url('Login') . "';</script>";
            }
        } 
        else 
        {
            $this->load->view('view_login');
        }
    }
}
