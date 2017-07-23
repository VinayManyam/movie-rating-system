<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		//load model -> model_products 
                
		$this->load->model('datare');
		
	}
    
    
public function index()
	{
            $this->load->helper('url');
            $this->load->library('session');
		$this->load->view('com/home');
       		$this->load->view('datahtml');
           
	}
  public function bannerdata()
	{
            $this->load->helper('url');
            $this->load->library('session');
		$this->load->view('com/home');
                  $data['bannerdata'] = $this->datare->banner();
                  $this->load->view('datahtml',$data);
               
       		             
           
	}
          public function bannerdata2()
	{
            $this->load->helper('url');
            $this->load->library('session');
		$this->load->view('com/home');
                  $data['bannerdata'] = $this->datare->banner();
                  $this->load->view('datahtml',$data);
               
       		             
           
	}
}