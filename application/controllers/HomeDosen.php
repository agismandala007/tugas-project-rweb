<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('download');

        if($this->session->userdata('tipe') != 'dosen' && empty($this->session->userdata()))
        {
            redirect('home');
        }
        else
        {
            $this->load->database();
            $this->load->model('M_dosen');
            $this->load->model('M_feedback');
            $this->load->model('M_download');
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

    function download($id)
    {
        $fileData = $this->M_download->getDocument($id);

        if (isset($fileData))
        {
            $filePath = realpath(APPPATH . 'doc/mahasiswa/') . '/' . $fileData[0]->nama;

            if (file_exists($filePath)) 
            {
                $contentType = mime_content_type($filePath);

                header('Content-Type: ' . $contentType);
                header('Content-Disposition: attachment; filename=' . $fileData['nama']);
                header('Content-Length: ' . filesize($filePath));

                // readfile($filePath);
                force_download($filePath, null);
            } 

            else 
            {
                echo "File tidak ditemukan.";
            }
        } 

        else 
        {
            echo "Data file tidak ditemukan.";
        }
    }
}