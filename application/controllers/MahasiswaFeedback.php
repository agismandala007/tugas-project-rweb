<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MahasiswaFeedback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('download');

        if ($this->session->userdata('tipe') != 'mahasiswa' && empty($this->session->userdata('tipe'))) {
            redirect('home');
        } else {
            $this->load->database();
            $this->load->model('M_download');
            $this->load->model('M_login');
        }
    }

    function index()
    {
        $data['mahasiswa'] = $this->M_login->getNama('mahasiswa', $this->session->userdata('email'));
        $data['feedback'] = $this->M_download->getDocument($data['mahasiswa']['id']);

        $this->load->view('view_mahasiswa_feedback', $data);
    }

    function download($id)
    {
        $data['mahasiswa'] = $this->M_login->getNama('mahasiswa', $this->session->userdata('email'));
        $fileData = $this->M_download->downloadDocument($id);

        if (isset($fileData)) {
            $filePath = realpath(APPPATH . 'doc/mahasiswa/') . '/' . $fileData[0]->nama;

            if (file_exists($filePath)) {
                $contentType = mime_content_type($filePath);

                header('Content-Type: ' . $contentType);
                header('Content-Disposition: attachment; filename=' . $fileData['nama']);
                header('Content-Length: ' . filesize($filePath));

                // readfile($filePath);
                force_download($filePath, null);
            } else {
                echo "File tidak ditemukan.";
            }
        } else {
            echo "Data file tidak ditemukan.";
        }
    }
}
