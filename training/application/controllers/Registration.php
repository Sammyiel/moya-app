<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller
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

    function index(){
        $this->load->view('frontend/sample_page');
    }

    function addToDatabase(){
        // $this->db->insert('frontend');
        $this->load->view('frontend/success');
    }
}