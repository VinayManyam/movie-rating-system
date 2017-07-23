<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pusers extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		//load model -> model_products 
               
		$this->load->model('datare');
		 $this->load->helper('url');
	}
    
    
public function index()
	{
           
  
		//$this->load->view('com/home');
       		$this->load->view('dashboard');
             $this->load->view('com/footer');
	}
        
        public function addMovie()
	{
           
  
		$this->load->view('com/home');
         $this->load->view('com/users');
                   
                 $data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                 $this->load->view('addmovie',$data);
          
             $this->load->view('com/footer');
	}

}