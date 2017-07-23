<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
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
                $data['bannerdata'] = $this->datare->banner();
                $data['slider'] = $this->datare->slider();
                $data['slider2'] = $this->datare->slider2();
                $data['feature'] = $this->datare->feature();
           
                  $this->load->view('com/body',$data);
                 // $this->load->view('com/users');
                $this->load->view('com/footer');
	}
        public function single()
	{
               
            
            
                   
                 $data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
               //  $data['com'] = $this->datare->comm();
                 $this->load->view('single',$data);
          
                $this->load->view('com/footer');
	}
              public function contact()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('contact');
                $this->load->view('com/footer');
	}
        
                public function faq()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('faq');
                $this->load->view('com/footer');
	}
        
       public function genres()
	{
         
		
                $data['slider'] = $this->datare->slider();
                  $data['feature'] = $this->datare->all();
                $this->load->view('genres',$data);
                          $this->load->view('com/footer');
	}
                           public function horror()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('horror');
                $this->load->view('com/footer');
	}
                                  public function icons()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('icons');
                $this->load->view('com/footer');
	}
                                    public function news()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('news-single');
                $this->load->view('com/footer');
	}
                                      public function series()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('series');
                $this->load->view('com/footer');
	}
                                       public function shortcodes()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('short-codes');
                $this->load->view('com/footer');
	}


        
        }
