<?php 


class ModelMovies extends CI_Model{
    
   function __construct(){
    parent::__construct();
}

 
     public function genres($data)
		{
                   
          $this->db->insert('subcat',$data);
				
		}
public function create($data_products)//لانشاء منتج جديد
		{
			//guery insert into database 	
			$this->db->insert('movieslist',$data_products);
				
		}

public function get_categories()
{
    $query = $this->db->get('subcat');
    $return = array();

    foreach ($query->result() as $category)
    {
        $return[$category->id] = $category;
        $return[$category->id]->subs = $this->get_sub_categories($category->id); // Get the categories sub categories
    }

    return $return;
}


public function get_sub_categories($category_id)
{
    $this->db->where('Category', $category_id);
    $query = $this->db->get('Sub_Categories');
    return $query->result();
}
                
           
}
?>

