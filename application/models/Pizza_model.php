<?php

class Pizza_model extends CI_Model{

    public function getAllTypeOfPizza(){
        $query = $this->db->get('pizzas');
        return $query->result();
    }

    public function getPizzaById($data){

        $this->db->where('id', $data);
        $query = $this->db->get('pizzas');
        return $query->result();
    }
}
