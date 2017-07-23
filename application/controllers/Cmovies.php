<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmovies extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		//load model -> model_products 
               
		$this->load->model('datare');
                $this->load->model('ModelMovies');
		 $this->load->helper('url');
	}
    
    
public function index()
	{
           
  
		$this->load->view('com/home');
       		$this->load->view('dashboard');
             $this->load->view('com/footer');
	}
        
        public function addMovie()
	{

                 $data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                 $this->load->view('addmovie',$data);
          
             $this->load->view('com/footer');
	}
               
         public function subcat()
	{

                 $data['categories'] = $this->ModelMovies->get_categories();
$this->load->view('cat', $data);
	}
           
     
         
        
        public function create()
	{
		
	
		$this->form_validation->set_rules('name','Movie Name','required');
		$this->form_validation->set_rules('year','Movie year','required');
		$this->form_validation->set_rules('description','Description');
		$this->form_validation->set_rules('rate','Movie rating','required');
		
		//$this->form_validation->set_rules('userfile','image error','required');	
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                 $this->load->view('addmovie',$data);
                 
                     $this->load->view('errors/error1');
                        $this->load->view('com/footer');
				
		}else{
                    
                    $pid = $this->datare->lastpid();
              
                    $name=$pid[0]->max+1;
                    
			//load uploading file 
				$config['upload_path']          = './images/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 2048000;// = MB
				$config['max_width']            = 2000;
				$config['max_height']           = 2000;
                                $config['file_name'] = $name;
				$this->load->library('upload', $config);
				
			if ( ! $this->upload->do_upload())
			{	
				$data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                 echo "error2";die;
                    $this->load->view('errors/error1');
                 $this->load->view('addmovie',$data);
                  
                        $this->load->view('com/footer');
				
				
			}else{	
                     
                           	// if form_validation = true  -> insert into db
					$upload_image = $this->upload->data();
					$data_products = array
					(
						'name'			=> set_value('name'),
						'year'			=> set_value('year'),
						'description'	=> set_value('description'),
						'rate'			=> set_value('rate'),
                                            'href'=>"single",
                                            'status'=>0,
                                            'user_id'=>$this->session->userdata('uid'),
						'src'			=> $upload_image['file_name']
					);//end array data_products
					
					$this->ModelMovies->create($data_products);
                                        
                                       $gen=array(
                                           'data'=>$_POST['genres'],
                                           'pid'=>$name
                                           
                                       );
                                       
                                       $test=$_POST['genres'];

                                       for($i=count($test)-1;$i>=0;$i--)
                                       {
                                                 $gen=array(
                                           'scid'=>$test[$i],
                                           'pid'=>$name
                                           
                                       );
                                                  $this->ModelMovies->genres($gen);
                                       }
    
                                   
                                        
                                        
                                        
                                        
						$data['slider'] = $this->datare->slider();
                 $data['next'] = $this->datare->next();
                 $data['com'] = $this->datare->comm();
                  $this->load->view('errors/fsuccess');
                 $this->load->view('addmovie',$data);
                   
                        $this->load->view('com/footer');
			} //end if uploading 
			
		}//end if form_validation
		
	}

}
