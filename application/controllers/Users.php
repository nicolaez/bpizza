<?php

class Users extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Order_model');
    }

    public function index(){
        $this->load->view('addUser');
    }

    public function add(){

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'passwd' => $this->input->post('passwd'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone')
        );

        $this->User_model->addUser($data);

        $this->load->view('login');

    }

    public function showInProccessOrders(){

        $data['inProccess']=$this->Order_model->inProccess();
        $this->load->view('ordersInProccess', $data);
    }
}