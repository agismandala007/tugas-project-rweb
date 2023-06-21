<?php
class M_registrasi extends CI_Model{

    function dosen(){
        $query = $this->db->get('dosen');
        return $query->result();
    }

    function addAkun($data)
    {
        $this->db->input('mahasiswa', $data);
    }
}