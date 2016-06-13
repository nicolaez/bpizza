<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nick
 * Date: 6/12/2016
 * Time: 2:37 PM
 */

class Auth_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //$this->load->model('User_model','',TRUE);
        $this->load->model('Auth_model','',TRUE);
    }

    public function index(){
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('login');
        }
        else
        {
            $email = $this->input->post('email');
            $passwd = $this->input->post('password');
            //query the database
            $result[] = $this->Auth_model->login($email, $passwd);

            if($result)
            {
                foreach($result as $row)
                {
                    $sess_array = array(
                        'id' => $row->id,
                        'address' => $row->address,
                        'phone' => $row->phone,
                        'type' => $row->type
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return TRUE;
            }
            else
            {
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                return false;
            }

            if($_SESSION['logged_in']['type'] == 0)
                redirect('http://bpizza.app/index.php/Order', 'refresh');
            else
                redirect('http://bpizza.app/index.php/Order/allOrders', 'refresh');

            //Go to private area
           /* if($_SESSION['logged_in']['type'] == 0)
                redirect('http://bpizza.app/index.php/Order', 'refresh');
            else
                redirect('http://bpizza.app/index.php/Order/allOrders', 'refresh');*/
        }
    }

    function check_database()
    {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');
        $passwd = $this->input->post('password');
        //query the database
        $result = $this->Auth->login($email, $passwd);

        if($result)
        {
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'address' => $row->address,
                    'phone' => $row->phone,
                    'type' => $row->type
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}