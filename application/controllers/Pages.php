<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                $this->load->view('com/body');
                $this->load->view('com/footer');
	}
        public function single()
	{
            $this->load->helper('url');
		$this->load->view('com/home');
                 $this->load->view('single');
                $this->load->view('com/footer');
	}
}
