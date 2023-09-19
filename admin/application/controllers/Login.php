<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('login');
	}
    /*check_login*/
    public function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->Login_model->check_login($username,$password);
        if ($result) 
        {
            $this->session->set_userdata('is_logged_in',true);
            $this->session->set_userdata('user_id',$result->userid);
            $this->session->set_userdata('user_detail',$result);
            redirect('Dashboard');
        }
        else
        {
            $this->session->set_flashdata('login_failed',"Invalid username or password.");
            redirect('Login');
        }
    }
}