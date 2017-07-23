<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ratecontrol extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		//load model -> model_products 
               
		$this->load->model('Ratemodel');
		 $this->load->helper('url');
	}
    
    
public function index()
	{
           
  
		//$this->load->view('com/home');
       		$this->load->view('rate');
             
	}
        
        public function getrate()
	{
           
  
		if(isset($_REQUEST['type'])) {
	if($_REQUEST['type'] == 'save') {
		
            $rate=array(
                'vote'=>$_REQUEST['vote'],
                'product_id'=>$_REQUEST['productId'],
                'uid'=>$this->session->userdata('uid')
            );
           
          $chek= $this->Ratemodel->chek($rate);
           If($chek) 
           {
            
            $this->Ratemodel->getrate($rate);
           }
 else {
     $this->Ratemodel->update($rate);
 }
            
               
                
        }
                }
 else {
                    echo "here u r out!!!";
 }
	}
        
 
}
