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
    }
}

?>