<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Pizza_model');
        $this->load->model('Topping_model');
        $this->load->model('Order_model');
        $this->load->helper('form');
    }

    public function index(){

        $this->load->view('add_order');
    }

    public function add(){

        if(!$this->session->userdata('my_order')){
            $maxOrder = $this->Order_model->getMaxOrder();
            $myOrder = $maxOrder+1;
                $ord_sess = array(
                    'my_order' => $myOrder
                );
            $this->session->set_userdata($ord_sess);
        }


        $temp = $this->input->post('myToppings[]');
        $top_price=0;
        $top_name= "";
        for($i=0; $i<sizeof($temp); $i++){
            $t = $this->Topping_model->getToppingById($temp[$i]);

           // print_r($t[0]->name);
            $top_name = $top_name.$t[0]->name. ", ";
            $top_price +=$t[0]->price;
        }
        $pizza = $this->Pizza_model->getPizzaById($this->input->post('type_pizza'));
        $pizza_type = $pizza[0]->size;
        $pizza_price = $pizza[0]->price;
        $qty = $this->input->post('quantity');
        $total_price = ($top_price + $pizza_price)*$qty;


        //$t = $this->Topping_model->getToppingById($temp[1]);
//print_r($top_name);
       // print_r($top_price);
        $data = array(
            'order_nr' => $_SESSION['my_order'],
            'user_id' => $_SESSION['logged_in']['id'],
            'pizza_type' => $pizza_type,
            'qty' => $qty,
            'description' => $top_name,
            'total_tops' => $top_price,
            'total' => $total_price
        );
        //print_r($data);
        $this->Order_model->addOrder($data);

        redirect('http://bpizza.app/index.php/Order/myOrder');
    }

    public function myOrder(){
        if($this->session->userdata('my_order')){
            $data['myOrder'] = $this->Order_model->myOrder($_SESSION['my_order']);
            $this->load->view('confirmation_order', $data);
        }
        else
            $this->load->view('add_order');

    }


    public function allOrders(){

        $this->load->view('allOrders_view');
    }

    public function readyOrder(){
        $ord_nr = $_GET['ord_nr'];
        $data = array(
            'status' => 1
        );
        $this->Order_model->readyOrder($ord_nr, $data);

        redirect('http://bpizza.app/index.php/Users/showInProccessOrders');

    }

    public function checkOrder(){
        $this->load->view('checkOrder');
    }

    public function checkOrderStatus(){
        $ord_nr = array(
            'chek_ord' => $this->input->post('ord_number')
        );
        $this->session->set_userdata($ord_nr);
        $checked['ord_check'] = $this->Order_model->checkOrderStatus($_SESSION['chek_ord']);
        $this->load->view('delivered_status', $checked);

       /* foreach($checked as $ch){
            if($ch['order_nr'] == $ord_number && $_SESSION['logged_in']['id']==$ch['user_id']){
                if($ch['status'] == 1){
                    $st = "Your order is delivered";
                    $this->load->view('delivered_status', $st);
                }
                else{
                    $st = "Your order is in proccess";
                    $this->load->view('delivered_status', $st);
                }
            }
        }*/
    }
}