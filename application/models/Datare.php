<?php 


class Datare extends CI_Model{
    
   function __construct(){
    parent::__construct();
}

public function banner(){
$show = $this->db->get('banner');
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}

public function slider(){
$show = $this->db->get('movieslist',8);
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}
public function all(){
$show = $this->db->get('movieslist');
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}


public function feature(){
$show = $this->db->get('movieslist',10);
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}

public function slider2(){
$show = $this->db->get('slider2',10);
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}
public function next(){
$show = $this->db->get('next');
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}

   public function comm(){
$show = $this->db->get('comments');
			if($show->num_rows() > 0 ) {
					return $show->result();
			} else {
					 return array();
			} 
	   
}   

   public function lastpid(){

      $res= $this->db->query('SELECT max(id) as max FROM movieslist');
	  return $res->result();
}   




}
?>

