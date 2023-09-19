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
        $this->load->view('header');
		$this->load->view('login');
        $this->load->view('footer');
	}
    /*check_login*/
    public function check_login()
    {
        $username = $this->input->post('phonenumber');
        $password = $this->input->post('password');
        $result = $this->Login_model->check_login($username,$password);
        if ($result) 
        { 
            // print_r($result->id);
            // die;
            $this->session->set_userdata('is_logged_in',true);
            $this->session->set_userdata('user_id',$result->id);
            $this->session->set_userdata('user_detail',$result);

            $is_login = $this->session->userdata('is_logged_in');
            $this->load->library('cart');
            $cartItems = $this->cart->contents();
           // print_r($cartItems);die;
            if ($is_login === true) {
                 if (!empty($cartItems)) {
                    foreach ($cartItems as $item) {

                        $product = $this->db->select('*')->from('product_tbl')->where('id', $item['id'])->get()->row();
                        $price = $product->product_sales_price;
                        $qty = $item['qty'];
           
                        $user=$this->session->userdata('user_detail');
                        $user_id = $user->id;
                        $data = array(
                            'user_id'  => $user_id,
                            'product_id'  => $product->id,
                            'cart_qty'  => $qty,
                            'product_price'   => $price,
                            'date' => date('Y-m-d'),
                        );   
                        //print_r($data);die;
                        $id = $this->Crud_model->insertCart($data);
                       
                    }
                }
                 redirect('Dashboard');
            }
        }
        else
        {
            $this->session->set_flashdata('login_failed',"Invalid username or password.");
            redirect('Login');
        }
    }
    public function check_login1()
    {
        $username = $this->input->post('phonenumber');
        $password = $this->input->post('password');
        $result = $this->Login_model->check_login($username,$password);
        if ($result) 
        { 
            // print_r($result->id);
            // die;
            $this->session->set_userdata('is_logged_in',true);
            $this->session->set_userdata('user_id',$result->id);
            $this->session->set_userdata('user_detail',$result);

            $is_login = $this->session->userdata('is_logged_in');
            $this->load->library('cart');
            $cartItems = $this->cart->contents();

            if ($is_login === true) {
                 if (!empty($cartItems)) {
                    foreach ($cartItems as $item) {

                        $product = $this->db->select('*')->from('product_tbl')->where('id', $item['id'])->get()->row();
                        $price = $product->product_sales_price;
                        $qty = $item['qty'];
           
                        $user=$this->session->userdata('user_detail');
                        $user_id = $user->id;
                        $data = array(
                            'user_id'  => $user_id,
                            'product_id'  => $product->id,
                            'cart_qty'  => $qty,
                            'product_price'   => $price,
                            'date' => date('Y-m-d'),
                        );   
                        //print_r($data);die;
                        $id = $this->Crud_model->insertCart($data);
                       
                    }
                }
             redirect($_SERVER['HTTP_REFERER']);
            }  

        }
        else
        {
            $this->session->set_flashdata('login_failed',"Invalid username or password.");
            redirect('Login');
        }
    }
}