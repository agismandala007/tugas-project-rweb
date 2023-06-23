<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MahasiswaFeedback extends CI_Controller
{
    function __construct ()
    {
        parent::__construct ();
        $this->load->library('session');
        $this->load->helper('download');

        if ($this->session->userdata('tipe') != 'mahasiswa' && empty($this->session->userdata('tipe')))
        {
            redirect('home');
        }
        else
        {
            $this->load->database();
            $this->load->model('M_feedback');
            $this->load->model('M_mahasiswa');
        }
    }

    function index ()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->getNama($this->session->userdata('email'));
        $data['feedback'] = $this->M_feedback->getDokumen($data['mahasiswa']['id']);

        $this->load->view('view_mahasiswa_feedback', $data);
    }

    function downloadData()
    {
        $data['mahasiswa'] = $this->M_mahasiswa->getNama($this->session->userdata('email'));
        $fileData = $this->M_feedback->GetDokumen($data['mahasiswa']['id']);

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