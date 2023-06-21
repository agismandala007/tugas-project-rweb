<?php
class M_dosen extends CI_Model
{
    function getMahasiswa($dosen)
    {
        $sub = $this->db->get_where('dosen', array('email' => $dosen));
        $sub = $sub->result();

        $query = $this->db->get_where('mahasiswa', array('dosenPembimbing' => $sub[0]->nama));
        return $query->result();
    }
}