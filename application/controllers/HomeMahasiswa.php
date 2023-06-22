<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeMahasiswa extends CI_Controller 
{
    function __construct ()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('M_mahasiswa');
        
        if($this->session->userdata('tipe') != 'mahasiswa' && !empty($this->session->userdata()))
        {
            redirect('home');
        }
        else
        {
            $this->load->database();
        }
    }

    function logout ()
    {
        session_destroy();
        redirect('home');
    }

    function index ()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->getNama($this->session->userdata('email'));
        $this->load->view('view_mahasiswa', $data);
    }

    function upload ()
    {
        $config['upload_path'] = realpath(APPPATH . "doc");;
        $config['allowed_types'] = 'doc|docx|pdf';
        $config['max_size'] = 10240; 

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_dokumen')) 
        {
            $error = $this->upload->display_errors();
            echo $error;
        } 
        else 
        {
            $data = $this->upload->data();
            $id = $this->M_mahasiswa->getNama($this->session->userdata('email'));
            $id = $id['id'];

            $upload = array(
                'id' => $id,
                'nama' => $data['file_name'],
                'type' => $data['file_type'],
                'data' => file_get_contents($data['full_path'])
            );
            
            $this->M_mahasiswa->uploadFile($upload);
        }
    }
}


?>