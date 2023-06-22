<?php
class M_mahasiswa extends CI_Model
{
    function getNama ($email)
    {
        $query = $this->db->get_where('mahasiswa', array('email' => $email));
        return $query->row_array();
    }


    function uploadFile ($data)
    {
        $this->db->insert('dokumen', array(
            'id_mhs' => $data['id'],
            'nama' => $data['nama'],
            'tipe' => $data['type'],
            'data' => $data['data']
        ));
    }

    function getDoc ($data)
    {
        $query = $this->db->get_where('dokumen', array('id_mhs' => $data));
        return $query->result();
    }
}