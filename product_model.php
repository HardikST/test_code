<?php
class product_model extends CI_Model{
    function __construct()
    {
            parent::__construct();
            $this->db = $this->load->database();
    }
    
    public function update_product($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('products',$data);
    }
    
    public function get_products_list($id=null)
    {
        $this->db->select('*');
        $this->db->from('products');
        if(!empty($id))
        {
            $this->db->where('id',$id);
        }
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        $res = $query->result_array();
        
        return $res;     
    }
    public function add_product($data)
    {
         $this->db->insert('products',$data);
    }
    public function delete_product($id)
    {
       
        $this->db->where('id',$id);
        $this->db->delete('products');
    }
    
  }
      
?>
