<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Login_model extends CI_Model 
{


  /*check_login*/
  public function check_login($username,$password)
  {
    $result = $this->db->select('*')
                       ->from('admin')
                       ->where('username',$username)
                       ->where('password',$password)
                       ->get()
                       ->row();
    return $result;
  }
	
	public function admin_details($user)
  {

       $sql=$this->db->where("userid",$user)->get('admin');
       $result= $sql->row();
      
      return $result;
  }


 } 
?>
