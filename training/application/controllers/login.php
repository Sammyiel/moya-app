<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');      
    }

    function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $query=$this->db->query("select * from users where email='$email' and password='$password'");
        // $data = $this->User->select($email, $password);
        $row = $query->num_rows();

        if ($row > 0) {
            echo $row;
            
            redirect(base_url('user/chat_room'));
        }else {
            echo redirect(base_url('user/loginUnsuccessful'));
        }
    }

    function saveChat(){
        $text = $this->input->post('text');
        // $password = $this->input->post('password');
        $query=$this->db->query("select * from users where text='$text'");
        // $data = $this->User->select($email, $password);
        $row = $query->num_rows(); 

        if ($row > 0) {
            echo $row;
            
            // echo redirect(base_url('user/loginUnsuccessful')); 
        } else {
            echo date("h:i a", time());
            // echo redirect(base_url('user/loginUnsuccessful'));
        }

        // $this->load->view('frontend/success');
    }
}