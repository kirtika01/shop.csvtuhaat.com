

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model 
{

	/*For Insert*/

	/*First Parameter is table name and second parameter is array data*/
	public function insert_record($table,$data)  
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	/*select_row*/
	/*First Parameter is table name and second parameter is where condition*/
	public function select_row($table,$where)
	{	
		
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$res = $this->db->get();
	
		return $res->row();
	}

	/*select_result*/
	/*First Parameter is table name and second parameter is where condition*/
	public function select_result($table,$column,$order)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($column,$order);
		$res = $this->db->get();
		return $res->result();
	}
	/*select_record*/
	/*First Parameter is table name and second parameter is where condition*/
	public function select_record($table,$where,$order="")
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		if (!empty($order)) {
			$this->db->order_by($order);
		}
		$res = $this->db->get();
		return $res->result();
	}


	
	/*Update Query*/
	public function update_record($table,$where,$data)
	{	
		$this->db->where($where);
		$this->db->update($table,$data);
		return true;

	}
	
	/*Delete Query*/
	public function delete_record($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return true;

	}


}


?>