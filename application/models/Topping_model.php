<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topping_model extends CI_Model{

    public function getAllTopings(){

        $query = $this->db->get('toppings');
        return $query->result();
    }

    public function getToppingById($data){

        $this->db->where('id', $data);
        $query = $this->db->get('toppings');
        return $query->result();
    }
}
