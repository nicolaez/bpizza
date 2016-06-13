<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nick
 * Date: 6/10/2016
 * Time: 6:37 PM
 */
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