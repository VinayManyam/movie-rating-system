<?php

  $id=$this->session->userdata('pid');
  
$query = "SELECT comments,name from comments where pid  = $id";

     $query = $this->db->query($query);
    $result=$query->result();
  
      
?>