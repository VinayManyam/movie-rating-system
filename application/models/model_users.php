<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_users extends CI_Model
{
    public function register_new($data_register_new)
    {
       $tels= $this->db->insert('users',$data_register_new);
       return $tels;
    }
    
     public function temp($data)
    {
       $tels= $this->db->insert('tempemail',$data);
       return $tels;
    }
    
    public function check_usr($data_register_new)
		{
				
			$stuts = '1';
			$gry = $this->db->where('usr_name',$data_register_new['usr_name'])
							->where('usr_password',$data_register_new['usr_password'])
							->where('stuts',$stuts)
							->limit(1)
							->get('users');
			if($gry->num_rows()	>	0)
			{
                            
				return $gry->row();	
			}else{
					return array();
			}
				
				
                }
                
                		
	public function check_user_is_active($data_register_new)
		{
			//if the user try to login and his account is not acctive
				
			$stuts = '0';
			$gry = $this->db->where('usr_name',$data_register_new['usr_name'])
							->where('usr_password',$data_register_new['usr_password'])
							->where('stuts',$stuts)
							->limit(1)
							->get('users');
			if($gry->num_rows()	>	0)
			{
				return $gry->row();	
			}else{
					return array();
			}
				
				
		}
    public function comments($com)
    {
       $tels= $this->db->insert('comments',$com);
       return $tels;
    }
      public function contact($com)
    {
       $tels= $this->db->insert('contact',$com);
       return $tels;
    }
    
    
    
         public function log($com)
    {
 $this->db->set($com);
$this->db->where("usr_name",$com['usr_name']);
$this->db->update("users",$com);
    }
    
    
    
    function verifyemail($data){
        $select="select email from tempemail where code='$data'";
        $query = $this->db->query($select);
        if($query->num_rows()>0)
        {
        $mail=$query->row()->email;
        $sql="update users set stuts=1 where usr_email='$mail'";
        $query = $this->db->query($sql);
        
        if($query){
             $select="delete from tempemail where code='$data'";
        $query = $this->db->query($select);
        if($query){
            echo "your account is activated";}
        }
        else {
            echo "email verification failed";
       
        }
        
        }
        else{
            echo "account dosn't exixst";
        }
        
    }
}
?>