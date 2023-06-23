<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DosenUpload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('tipe') != 'dosen' && empty($this->session->userdata('tipe')))
        {
            redirect('home');
        }
        else
        {
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->model('M_dosen');
            $this->load->model('M_mahasiswa');
            $this->load->model('M_upload');
        }
    }

    function index($id)
    {
        $id = $id;

        $data['nama'] = $this->M_dosen->getNama($this->session->userdata('email'));
        $data['namaMahasiswa'] = $this->M_upload->getNama($id);
        $this->load->view('view_dosen_upload', $data);
    }

    function upload()
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
            $id = $this->id;

            $upload = array(
                'id' => $id,
                'date' => date('Y-m-d'),
                'nama' => $data['file_name'],
                'type' => $data['file_type'],
                'data' => file_get_contents($data['full_path'])
            );
            
            $this->M_mahasiswa->uploadFile($upload);
        }
        
    }
}