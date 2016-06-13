<?php

class Order_model extends CI_Model{

    public function getMaxOrder(){

        $this->db->select_max('order_nr');
        $query = $this->db->get('orders')->row();
        return $query->order_nr;
    }

    public function addOrder($data){

        $this->db->set($data);
        $this->db->insert('orders', $data);
    }

    public function myOrder($data){

        $this->db->where('order_nr', $data);
        $query = $this->db->get('orders');
        return $query->result_array();
    }

    public function inProccess(){

        $this->db->group_by('order_nr');
        $this->db->where('status',0);
        $query = $this->db->get('orders');

        return $query->result_array();
    }

    public function selectedOrders($data){

        $this->db->where('order_nr', $data);
        $query = $this->db->get('orders');

        return $query->result_array();
    }

    public function readyOrder($ord_nr, $data){
        $this->db->where('order_nr', $ord_nr);
        $this->db->update('orders', $data);
    }

    public function checkOrderStatus($data){

        $this->db->group_by('order_nr');
        $this->db->where('order_nr',$data);
        $query = $this->db->get('orders');

        return $query->result_array();
    }


}