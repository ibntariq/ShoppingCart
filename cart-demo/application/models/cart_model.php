<?php

  class Cart_model extends CI_Model{
      
        function get_products(){
            
            $query = $this->db->get('products');
            return $query->result_array();
            
        }
        
        function insert_product($id){
            
            $query = $this->db->get_where('products',array('id'=>$id))->result();
            $result = $query[0];
            return $result;
                
                
                
        }
            
        }
      
      
  


?>
