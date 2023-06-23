<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('tipe') != 'dosen' && empty($this->session->userdata()))
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

    function upload($id)
    {
        $this->load->view('DosenUpload/' . $id);
    }

    function download()
    {
        $config['upload_path'] = realpath(APPPATH . "doc/mahasiswa/");;
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
                'date' => date('Y-m-d'),
                'nama' => $data['file_name'],
                'type' => $data['file_type'],
                'data' => file_get_contents($data['full_path'])
            );
            
            $this->M_mahasiswa->uploadFile($upload);
        }
        
        $this->index();
    }
}