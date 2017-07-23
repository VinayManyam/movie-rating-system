<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		//load model -> model_products 
               
		
		 $this->load->helper('url');
	}
    
    
public function index()
	{
$ci = get_instance();
$ci->load->library('email');
$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.gmail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "edmin541@gmail.com"; 
$config['smtp_pass'] = "Adminh7541"; 
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

$ci->email->initialize($config);

$ci->email->from('replay@gmail.com', 'Blabla');
$ci->email->to('vinayip541@gmail.com');
$ci->email->subject('This is an email test');
$ci->email->message('hithis is email testing 2 <br> <font align="center" color="green">please confrom your email</font><img src="https://yt3.ggpht.com/-PJRROvsJXks/AAAAAAAAAAI/AAAAAAAAAAA/OuEMOeS1U8s/s900-c-k-no-mo-rj-c0xffffff/photo.jpg">');

$res=$ci->email->send();

    function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$str=array('email'=>$this->input->post('Email'),
    'code'=>generateRandomString());
if($res){
    echo "sent successfully";
    $this->load->view('verify',$str);
    
}else{
    echo "mail sending failed";
}

  
		
	}
        
    

}