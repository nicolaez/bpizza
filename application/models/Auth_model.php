<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nick
 * Date: 6/12/2016
 * Time: 3:21 PM
 */

class Auth_model extends CI_Model{

    function login($email, $passwd){
        /*$this->db->select('id', 'email', 'passwd', 'address', 'phone', 'type');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('passwd', $passwd);
        $this->db->limit(1);*/


        $this->db->where('email', $email);
        $this->db->where('passwd', $passwd);
        $query = $this->db->get('users');

        return $query->result();
        /*if($query->num_rows() == 1){
            return $query->result_array();
        }
        else{
            return false;
        }*/
    }
}