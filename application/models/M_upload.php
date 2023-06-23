<?php

class M_upload extends CI_Model
{
    function getNama($id)
    {
        $query = $this->db->get_where('mahasiswa', array('id' => $id));
        return $query->result();
    }
}