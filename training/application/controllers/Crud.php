
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller
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

    function savedata(){
		$msg['text'] = $this->input->post('text');
		$msg['time'] = $this->input->post('time');
		$msg['name'] = $this->input->post('name');
		$msg['type'] = $this->input->post('type');

		$this->db->insert('chats', $msg);
	}
    
}