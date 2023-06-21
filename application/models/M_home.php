<?php

class M_home extends CI_model {
    public function getData($data) {
        $query = $this->db->where('nama', $data);
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    function dataMahasiswa() {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
}