<?php

class M_home extends CI_model 
{
    public function getData($data) 
    {
        $query = $this->db->like('nama', $data);
        $query = $this->db->get('mahasiswa');

        if($query->num_rows() > 0)
        {
            return $query->result();
        }

        return null;
    }

    function dataMahasiswa() 
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
}