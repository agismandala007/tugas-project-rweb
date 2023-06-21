<?php
class M_login extends CI_Model
{
    function verify($email, $password)
    {
        $query = $this->db->get_where('akun', array('email' => $email, 'password' => $password));

        if ($query->num_rows() > 0) 
        {
            return $query->row_array();
        } 
        else 
        {
            return false;
        }
    }
}