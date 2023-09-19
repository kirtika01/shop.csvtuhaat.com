<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model 
{	
	public function allbanner()  
	{
		$this->db->select('*');
		$this->db->from('banner_tbl');
		$res = $this->db->get();
	
		return $res->result();
	}

	public function insertbanner($data)  
	{
		$this->db->insert('banner_tbl',$data);
		return $this->db->insert_id();
	}

	public function view_banner($ID)
	{
	return $this->db->where('id',$ID)->get('banner_tbl')->result();
	}

	public function updatebanner($id, $data)
	{
		
		$this->db->where('id', $id);
		$this->db->update('banner_tbl', $data);
	}

	public function getbannerbyId($id)
	{
	   $this->db->select('*');
	   $this->db->from('banner_tbl');
	   $this->db->where('id',$id);
	   $result = $this->db->get()->row();
	   return $result;
	}

	public function getbanner()
	{
	   $this->db->select('*');
	   $this->db->from('category_tbl');
	   $result = $this->db->get()->result();
	   return $result;
	}
	public function allCategory()  
	{
		$this->db->select('*');
		$this->db->from('category_tbl');
		$res = $this->db->get();
	
		return $res->result();
	}
    public function insertCategory($data)  
	{
		$this->db->insert('category_tbl',$data);
		return $this->db->insert_id();
	}

	public function view_category($ID)
	{
	return $this->db->where('id',$ID)->get('category_tbl')->result();
	}

	public function updateCategory($id, $data)
	{
		
		$this->db->where('id', $id);
		$this->db->update('category_tbl', $data);
	}

	public function getCategorybyId($id)
	{
	   $this->db->select('*');
	   $this->db->from('category_tbl');
	   $this->db->where('id',$id);
	   $result = $this->db->get()->row();
	   return $result;
	}

	public function getCategory()
	{
	   $this->db->select('*');
	   $this->db->from('category_tbl');
	   $result = $this->db->get()->result();
	   return $result;
	}

	// ######## product ##############

	public function insert_product($data)  
	{
		$this->db->insert('product_tbl',$data);
		return $this->db->insert_id();
	}
	public function getProductlist()
	{
	   $this->db->select('*');
	   $this->db->from('product_tbl');
	   $result = $this->db->get()->result();
	   return $result;
	}
	public function getProduct($id)
	{
	   $this->db->select('*');
	   $this->db->from('product_tbl');
	   $this->db->where('id',$id);
	   $result = $this->db->get()->row();
	   return $result;
	}
	public function get_product_images($id) {
        $query = $this->db->select('product_image')
                          ->where('id', $id)
                          ->get('product_tbl'); 
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            return explode(',', $result['product_image']);
        }
        return array(); 
    }
	public function deleteProduct($id) {
		
		$this->db->where('id', $id);
		$this->db->delete('product_tbl'); 
	}

	public function updateProduct($id,$data)
	{	
		$this->db->where('id',$id);
		$this->db->update('product_tbl',$data);
		return true;

	}
	public function insertUser($data)  
	{
		$this->db->insert('admin',$data);
		return $this->db->insert_id();
	}
	public function getUser()
	{
	   $this->db->select('*');
	   $this->db->from('admin');
	   $this->db->where('userid !=',1);
	   $result = $this->db->get()->result();
	   return $result;
	}
	public function getUserById($id)
	{
	   $this->db->select('*');
	   $this->db->from('admin');
	   $this->db->where('userid',$id);
	   $result = $this->db->get()->row();
	   return $result;
	}

	public function upadateOrder($id,$data)
	{	
		$this->db->where('id',$id);
		$this->db->update('order_tbl',$data);
		return true;

	}

	public function updateCategoryStatus($id,$data)
	{	
		$this->db->where('id',$id);
		$this->db->update('category_tbl',$data);
		return true;

	}
	public function updatebannerStatus($id,$data)
	{	
		$this->db->where('id',$id);
		$this->db->update('banner_tbl',$data);
		return true;

	}

	public function deleteUser($id) {
		
		$this->db->where('userid', $id);
		$this->db->delete('admin'); 
	}
	public function updateProfile($id,$data)
	{	
		$this->db->where('userid',$id);
		$this->db->update('admin',$data);
		return true;

	}


	// ########## Order ###########
	public function getOrderlist()
	{
	   $this->db->select('*');
	   $this->db->from('order_tbl');
	   $result = $this->db->get()->result();
	   return $result;
	}
    public function getOrderById($id)
	{
	   $this->db->select('*');
	   $this->db->from('order_tbl');
	   $this->db->where('id',$id);
	   $result = $this->db->get()->row();
	   return $result;
	}
	
}