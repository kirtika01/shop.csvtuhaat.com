<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

    // public function searchProducts($keyword) {
    //     $this->db->like('product_name', $keyword);
    //     $query = $this->db->get('product_tbl');
    //     return $query->result();
    // }

    public function searchProducts($keyword) {
        $this->db->select('product_tbl.*, category_tbl.category_name');
        $this->db->from('product_tbl');
        $this->db->join('category_tbl', 'category_tbl.id = product_tbl.product_category_id', 'left');
        $this->db->like('product_name', $keyword);
        $this->db->or_like('category_name', $keyword);
        $query = $this->db->get();
    
        $results = $query->result();
    
        if (empty($results)) {
            return array('message' => 'No products or categories found.');
        } else {
            return $results;
        }
    }
    
  
}
