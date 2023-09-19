<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
   public function about_us(){
   			$this->load->view('about');

   }
   public function blog_detail(){
   			$this->load->view('blog_detail');

   }
   public function blog(){
   			$this->load->view('blog');

   }
   public function contact_us(){
   			$this->load->view('contact_us');

   }
   public function enquiry(){
   			$this->load->view('enquiry');

   }
   public function location(){
   			$this->load->view('location');

   }
   public function location2(){
   			$this->load->view('location2');

   }
   public function login(){
   			$this->load->view('login');

   }
   public function product_detail(){
   			$this->load->view('product_detail');

   }
   public function signup(){
	    
   	    $this->load->view('signup');

   }
   public function insert_signup(){
	    
   			$data=[
				 
			    'name'=>$this->input->post('name'),
			    'dob'=>$this->input->post('birthdate'),
			    'address'=>$this->input->post('Address'),
			    'email'=>$this->input->post('email'),
			    'phone_number'=>$this->input->post('phone'),
				'password'=>$this->input->post('password'),
			    'date'=>date('Y-m-d'),
			];
			print_r($_POST);
			// die;
			$this->Crud_model->insert_record('register_page',$data);
			// print_r($data);
			
			redirect('login');


		}
		

}

   ?>