<?php

class M_upload extends CI_Model
{
    function uploadFile($data)
    {
        $this->db->insert('dokumen', array(
            'id_mhs' => $data['id'],
            'date' => $data['date'],
            'nama' => $data['nama'],
            'tipe' => $data['type'],
            'data' => $data['data']
        ));
    }
}
