<?php
class M_feedback extends CI_Model
{

    function getDokumen($id)
    {
        $query = $this->db->get_where('dokumen', array('id_mhs' => $id));
        return $query->result();
    }
}