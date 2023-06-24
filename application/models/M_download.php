<?php
class M_download extends CI_Model
{
    function getDocument($id)
    {
        $query = $this->db->get_where('dokumen', array('id_mhs' => $id));

        if ($query->num_rows() > 0 )
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }

    function downloadDocument($id)
    {
        $query = $this->db->get_where('dokumen', array('id' => $id));

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }
    }
}