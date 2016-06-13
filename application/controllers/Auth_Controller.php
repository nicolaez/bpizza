<?php


class Auth_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', '', TRUE);
    }

    public function index(){

        $email = $this->input->post('email');
        $passwd = $this->input->post('password');

        $result = $this->Auth_model->login($email, $passwd);
print_r($result);
        foreach($result as $usr){
            $sess_array = array(
                'id' => $usr->id,
                'name'=>$usr->name,
                'address' => $usr->address,
                'phone' => $usr->phone,
                'type' => $usr->type
            );
            $this->session->set_userdata('logged_in', $sess_array);
        }
        print_r($sess_array);
        if($_SESSION['logged_in']['type']==0)
            redirect('http://bpizza.app/index.php/Order');
        if($_SESSION['logged_in']['type']==1)
            redirect('http://bpizza.app/index.php/Users/showInProccessOrders');
    }

    public function logout(){
        $this->session->sess_destroy();

        $this->load->view('login');
    }
}
