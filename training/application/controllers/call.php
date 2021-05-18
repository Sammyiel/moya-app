<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// include 'translation.php';

class call extends user
{
    function try() {
        // $this->load->library('../controllers/user');
        $this->load->user->chat();
    }
}
