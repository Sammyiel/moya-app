
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
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

    function chat() {
        $this->load->view('frontend/chat');
    }

    function chat_room() {
        $this->load->view('frontend/chat_room');
    }

    function chat_responses() {
        $this->load->view('frontend/chat_responses');
    }

    function index(){
        // $this->load->view('frontend/sample_page');
        $this->load->view('frontend/header');
        $this->load->view('frontend/slideshow');
        $this->load->view('frontend/footer');
    }
    function sendSMS(){
        $phone_nb = $this->input->post('phone');
        if(strlen($phone_nb = 12)){
            $phone = $phone_nb;
        }elseif(strlen($phone_nb = 10)){
            $phone = "25".$phone_nb;
        }elseif(strlen($phone_nb = 9)){
            $phone = "250".$phone_nb;
        }
        $message = "Dear User!"."\r\n"."Your application has been received successfully. Thank you for showing your interest in joining our team"."Regards,"."\r\n"."VONSUNG team";

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt_array($curl, array(
 CURLOPT_URL => "https://mistasms.com/sms/api",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 0,
 CURLOPT_FOLLOWLOCATION => false,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => array('action' => 'send-sms','to' => $phone,'from' => 'VONSUNG','sms' => $message,'api_key' => 'dmlBPXZGRmRPYk1qc3B6cEZ2enQ='),
));
curl_setopt( $curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_WHATEVER);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
 echo "cURL Error #:" . $err;
}

        // Send SMS -- end
        
        redirect(base_url(), 'refresh');
    }


    function flutter(){
        $this->load->view('frontend/flutter');
    }
    function payment(){
        $this->load->view('frontend/payment');
    }
    function makepayment(){
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['amount'] = $this->input->post('amount');
        $data['phone'] = $this->input->post('phone');

        $this->load->view('frontend/paynow', $data);


    }
    function login(){
        $this->load->view('frontend/header');
        
          $this->load->view('frontend/login');
            $this->load->view('frontend/footer');
    
    }

    function loginUnsuccessful(){
        $this->load->view('frontend/header');
        
          $this->load->view('frontend/invalid-login');
            $this->load->view('frontend/footer');
    
    }
   
    function account(){
            $this->load->view('frontend/header');
            
            ;
                
        $this->load->view('frontend/smscode');
                    $this->load->view('frontend/footer');

        }
    function contact(){
            $this->load->view('frontend/header');
            
                    $this->load->view('frontend/contact');
                    $this->load->view('frontend/footer');

        }
    function setting(){
        $this->load->view('frontend/header');
         
            $this->load->view('frontend/editprofile');
    
                $this->load->view('frontend/footer');

    }
     function phonelogin(){
        $this->load->view('frontend/header');
         
        $this->load->view('frontend/smscode');
    
        $this->load->view('frontend/footer');

    }
    
}