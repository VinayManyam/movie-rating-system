<?php
class Ratemodel extends CI_Model{
function __construct(){
    parent::__construct();
}
public function getrate($data){
if ($this->db->insert("rating", $data)) {
return true;
}
}
public function chek($data){

$gry = $this->db->where('product_id ',$data['product_id'])
							->where('uid',$data['uid'])
							->get('rating');
			if($gry->num_rows()	>	0)
			{
                            
				return FALSE;	
			}else{
					return TRUE;
			}
}



public function update($data){

    
   $this->db->set($data); 
$this->db->where("product_id",$data['product_id'] ); 
$this->db->where("uid",$data['uid']); 
$this->db->update("rating", $data);
    
}







}
?>