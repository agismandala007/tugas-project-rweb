<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    
    }


    function index(){
        $this->load->view('view_login');
    }

    function add() {
        echo "Hello mas hanif";
    }
}

?>