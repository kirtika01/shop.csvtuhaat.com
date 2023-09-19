<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    protected function require_login()
    {
        $user=$this->session->userdata('user_id');
        $data['user_details'] = $this->Login_model->admin_details($user);
        if(!empty( $data['user_details']))
        { 

    	 $is_logged_in = $this->session->userdata('is_logged_in');
          if(!isset($is_logged_in) || $is_logged_in != true)
          {
            redirect('Login');
          }
          else
          {

          }
        }
        else
        {
           redirect('Login');
        } 
          
    }
    public function index()
    {
        $this->require_login();
        $data['page'] = "dashboard";

        $Today = date("Y-m-d");
     
        // $data['reminder']=$this->Crud_model->select_record('shedule_tbl',array('shedule_date '=>$REMIND),'`id` desc');
        // $data['upcoming']=$this->Crud_model->select_record('shedule_tbl',array('shedule_date >'=>$REMIND),'`id` desc');
        // $data['past']=$this->Crud_model->select_record('shedule_tbl',array('shedule_date < '=>$REMIND),'`id` desc');
        // $data['customer']=$this->Crud_model->select_record('customer_tbl',array('status'=>1),'`id` desc');
        // $data['order']=$this->Crud_model->select_result('order_table','id','desc');

        $this->load->view('inc/header',$data);
        $this->load->view('home',$data);
        $this->load->view('inc/footer',$data);
    }

    public  function logout()

    {
      $user_data = $this->session->userdata('user_detail');
        foreach ($user_data as $key => $value) {

            if ($key != 'id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'data') {

                $this->session->unset_userdata($key);

            }

        }

      $this->session->sess_destroy();

       redirect('Dashboard');

    }
}    