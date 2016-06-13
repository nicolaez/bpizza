<?php

class Auth_model extends CI_Model{

    function login($email, $passwd){
        $this->db->where('email', $email);
        $this->db->where('passwd', $passwd);
        $query = $this->db->get('users');

        return $query->result();
    }
}
