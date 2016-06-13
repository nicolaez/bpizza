<?php

class User_model extends CI_Model{

    public function addUser($data){
        $this->db->set($data);
        $this->db->insert('users', $data);
    }

    public function getUserById($data){
        $this->db->where('id', $data);
        $query = $this->db->get('users');

        return $query->result_array();
    }
}