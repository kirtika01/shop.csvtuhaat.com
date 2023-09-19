<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	//search product
	function search($keyword)
   {
       $this->db->like('product_name',$keyword);
       $query  =   $this->db->get('product_tbl');
       return $query->result_array();
   }

  public function insert_record($data)  
	{
    //print_r($_POST);die;
		$this->db->insert('user_tbl',$data);
		return $this->db->insert_id();
	}
	public function getbannerbyid($id)
	{
	   $this->db->select('*');
	   $this->db->from('banner_tbl');
	   $this->db->where('banner_id',$id);
	   $result = $this->db->get()->result();
	   return $result;
	}

  public function getproduct()
	{
	   $this->db->select('*');
	   $this->db->from('product_tbl');
	   $result = $this->db->get()->result();
	   return $result;
	}
	public function getproductbyid($id)
	{
	   $this->db->select('*');
	   $this->db->from('product_tbl');
	   $this->db->where('id',$id);
	   $result = $this->db->get()->row();
	   return $result;
	}
	public function insert_review($data)  
	{
		$this->db->insert('review_tbl',$data);
		return $this->db->insert_id();
	}
	public function insertCart($data)  
	{
		$this->db->insert('cart_tbl',$data);
		return $this->db->insert_id();
	}
	public function updateCartQuantity($cartId, $quantity) {
		$user=$this->session->userdata('user_detail');
        $data = array(
            'cart_qty' => $quantity
        );
        $this->db->where('id', $cartId);
		$this->db->where('user_id',$user->id);
        return $this->db->update('cart_tbl', $data);
    }
	public function removeCartItem($cartId) {
		$is_login = $this->session->userdata('is_logged_in');
		if ($is_login === true) 
		{
			$user=$this->session->userdata('user_detail');
			$this->db->where('id', $cartId);
			$this->db->where('user_id',$user->id);
			return $this->db->delete('cart_tbl');
		}
    }
	public function getcategoryproductbyid($id)
	{
	   $this->db->select('*');
	   $this->db->from('product_tbl');
	   $this->db->where('product_category_id',$id);
	   $result = $this->db->get()->result();
	   return $result;
	}

	public function updateProfile($id,$data)
	{	//print_r($id);die;
		$this->db->where('id',$id);
		$this->db->update('user_tbl',$data);
		return true;

	}
	public function insertOrder($data)  
	{
		$this->db->insert('order_tbl',$data);
		return $this->db->insert_id();
	}
	public function insertProductOrder($data)  
	{
		$this->db->insert('order_product_tbl',$data);
		return $this->db->insert_id();
	}
	public function removeCart($userId) {
			
			$this->db->where('user_id',$userId);
			return $this->db->delete('cart_tbl');
    }
}
