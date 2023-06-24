<?php
class M_mahasiswa extends CI_Model
{
    function getMahasiswa($dosen)
    {
        $sub = $this->db->get_where('dosen', array('email' => $dosen));
        $sub = $sub->result();

        $query = $this->db->get_where('mahasiswa', array('dosenPembimbing' => $sub[0]->nama));
        return $query->result();
    }

    function getNama($id)
    {
        $query = $this->db->get_where('mahasiswa', array('id' => $id));
        return $query->result();
    }

    public function cariMahasiswa($data)
    {
        $query = $this->db->like('nama', $data);
        $query = $this->db->get('mahasiswa');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return null;
    }

    function dataMahasiswa()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    function setStatus($status, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', array('status' => $status));
    }
}
