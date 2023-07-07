<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeMahasiswa extends CI_Controller 
{
    function __construct ()
    {
        parent::__construct();
        $this->load->helper('date');
        $this->load->library('session');
        $this->load->library('form_validation');

        
        if($this->session->userdata('tipe') != 'mahasiswa' || empty($this->session->userdata()))
        {
            redirect('Home');
        }
        else
        {
            $this->load->database();
            $this->load->model('M_login');
            $this->load->model('M_upload');
        }
    }

    function logout ()
    {
        session_destroy();
        redirect('home');
    }

    function index ()
    {
        $data['mahasiswa'] = $this->M_login->getNama('mahasiswa', $this->session->userdata('email'));
        $this->load->view('view_mahasiswa', $data);
    }

    function upload ()
    {
        $config['upload_path'] = realpath(APPPATH . "doc/mahasiswa/");;
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['max_size'] = 10240; 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_dokumen')) 
        {
            echo "<script>alert('Tipe file yang anda masukan salah, mohon hanya pdf, docx dan doc saja'); window.location.href = '" . base_url('HomeMahasiswa') . "';</script>";
        } 
        else 
        {
            $data = $this->upload->data();
            $id = $this->M_login->getNama('mahasiswa', $this->session->userdata('email'));
            $id = $id['id'];

            $upload = array(
                'id' => $id,
                'date' => date('Y-m-d'),
                'nama' => $data['file_name'],
                'type' => $data['file_type'],
                'data' => file_get_contents($data['full_path'])
            );
            
            $this->M_upload->uploadFile($upload);
            echo "<script>alert('Berhasil Disimpan'); window.location.href = '" . base_url('HomeMahasiswa') . "';</script>";
        }
        
        $this->index();
    }
}
