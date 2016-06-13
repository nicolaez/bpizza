<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by IntelliJ IDEA.
 * User: Nick
 * Date: 6/10/2016
 * Time: 6:58 PM
 */
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