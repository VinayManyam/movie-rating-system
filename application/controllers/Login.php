<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
function __construct(){
parent::__construct();
$this->load->helper('url');
$this->load->database();
$this->load->model('datare');
$this->load->model('model_users');
}
public function adduser(){
    

	$this->form_validation->set_rules('Username','Name','required');
		$this->form_validation->set_rules('Password','password','required|min_length[6]|max_length[16]');
		$this->form_validation->set_rules('Email','email','required|valid_email|is_unique[users.usr_email]');
		if ($this->form_validation->run() == FALSE)
		{
            $data['bannerdata'] = $this->datare->banner();
                $data['slider'] = $this->datare->slider();
                $data['slider2'] = $this->datare->slider2();
                $data['feature'] = $this->datare->feature();
             $this->load->view('errors/error2');
                  $this->load->view('com/body',$data);
                 // $this->load->view('com/users');
                $this->load->view('com/footer');
                }
                else{
                    $data_register_new = array(
'usr_name' => $this->input->post('Username'),
    'usr_password'=> md5($this->input->post('Password')),
    'usr_email'=> $this->input->post('Email') ,
    'stuts'=>'0',
    'usr_group'=>'3'
);

	
$tel=$this->model_users->register_new($data_register_new);
if($tel)
{    
    
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
$tel=$this->model_users->temp($str);
if($tel)
{
  
   
    $ci = get_instance();
$ci->load->library('email');
$config['protocol'] = "smtp";
$config['smtp_host'] = "ssl://smtp.gmail.com";
$config['smtp_port'] = "465";
$config['smtp_user'] = "mail"; 
$config['smtp_pass'] = "password"; 
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['newline'] = "\r\n";

$ci->email->initialize($config);

$ci->email->from('no-replay@gmail.com', 'Conformation');
$ci->email->to($this->input->post('Email'));
$ci->email->subject('conformation mail');
  $this->email->message($this->load->view('verify',$str, true));
$res=$ci->email->send();
if($res){
     $data['bannerdata'] = $this->datare->banner();
                $data['slider'] = $this->datare->slider();
                $data['slider2'] = $this->datare->slider2();
                $data['feature'] = $this->datare->feature();
            $this->load->view('com/success');
                  $this->load->view('com/body',$data);
                 // $this->load->view('com/users');
                $this->load->view('com/footer');
}else{
    echo "mail sending failed";
}

}
else 
{
    echo "failed to send verification mail";
}

 
    
}
 else {
       echo "<h2 align=\"center\"><font color=\"red\">Registration Failed.Try again</font></h2>";

       
 }
                }
}
public function userlogin()
        {
   $data_register_new = array(
'usr_name' => $this->input->post('Username'),
    'usr_password'=> md5($this->input->post('Password'))
    );
         $this->load->model('model_users');
        $valid_user=$this->model_users->check_usr($data_register_new);
      
       $check_user_is_active=$this->model_users->check_user_is_active($data_register_new);
        if($valid_user==FALSE)
        {
           if( $check_user_is_active==FALSE)
           {
               //$this->load->view('com/home');
                $data['bannerdata'] = $this->datare->banner();
                $data['slider'] = $this->datare->slider();
                $data['slider2'] = $this->datare->slider2();
                $data['feature'] = $this->datare->feature();
           $this->load->view('errors/error3');  
                  $this->load->view('com/body',$data);
                 // $this->load->view('com/users');
                $this->load->view('com/footer');
               
               
               
               
               
               
                            
              
              
           }
           else {
                  $data['bannerdata'] = $this->datare->banner();
                $data['slider'] = $this->datare->slider();
                $data['slider2'] = $this->datare->slider2();
                $data['feature'] = $this->datare->feature();
            $this->load->view('errors/error4');
                  $this->load->view('com/body',$data);
                 // $this->load->view('com/users');
                $this->load->view('com/footer');
            echo "your account is blocked by administrator,please try again later";
            }
        }
        else {
                             $log = array('last' =>'NOW()',
                                 'usr_name' => $this->input->post('Username') );
                             
                             $this->model_users->log($log);
                             
            $this->session->set_userdata('username',$valid_user->usr_name);
	$this->session->set_userdata('group',$valid_user->usr_group);
        $this->session->set_userdata('uid',$valid_user->usr_id);

               switch($valid_user->usr_group)
				{
					case 1 ://for admin
							redirect('admin/products');
					break;
					
					case 2 ://for c-admin
							redirect('admin/products');
					break;
					
					case 3 ://for member
							redirect(base_url());
					break;
					
					default: break;
				}
            }
           
    
    


        }
        
        
	public function logout()
	{
          
   $this->load->library('session');
	  $tel=$this->session->sess_destroy();
		redirect(base_url());	
               
	}
        
        
      public function comments()
	{
          if($this->session->userdata('uid')){
 $com = array(
'uid'=>$this->session->userdata('uid'),
     'name'=>$this->session->userdata('username'),
     'pid'=>$this->session->userdata('pid'),
  'comments'=> $this->input->post('Comments')
);
$tel=$this->model_users->comments($com);

if($tel)
{    

$this->load->helper('url');
$this->load->model('datare');
		
                $this->load->view('com/users');
                 $data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                 $data['res']="comments are sent successfully";
                 $this->load->view('single',$data);
                $this->load->view('com/footer');

}
 else {
       echo "<h2 align=\"center\"><font color=\"red\">Data Failed to sent.Try again</font></h2>";

       
 }
          }
 else {
   
   $this->load->view('errors/error5');
   $data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                 $this->load->view('single',$data);
          
                $this->load->view('com/footer');
 }
                
                
	}
        
        
        
        
        
        
       public function contact()
	{
           
 $com = array(
'fname' => $this->input->post('fname'),
    'lname'=> $this->input->post('lname'),
    'email'=> $this->input->post('email') ,
  'sbj'=> $this->input->post('sbj'),
     'msg'=> $this->input->post('msg')
);
$tel=$this->model_users->contact($com);

if($tel)
{    


 echo "data inserted";
redirect('start/contact');

}
 else {
       echo "<h2 align=\"center\"><font color=\"red\">Data Failed to sent.Try again</font></h2>";

       
 }
                
                
	} 
        
        
        
        
        
     function verify($verificationText=NULL)
             { $noRecords = $this->model_users->verifyemail($verificationText);
             
             die;
             if ($noRecords > 0)
                 { echo  "Email Verified Successfully!";
             }else{ 
                 $error = array( 'error' => "Sorry Unable to Verify Your Email!"); }
              echo 'error'; 
                 
             }     
        
        
        
        
        
        
        
        
        
        
        
        
        
        

}





