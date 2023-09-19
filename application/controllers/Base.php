<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('cart');
	}
	public function index()
	{
       // print_r($data['cart']);die;
		$data['product'] = $this->Crud_model->getproduct();
        
		$this->load->view('header',$data);
		$this->load->view('index',$data);
        $this->load->view('footer',$data);
	}
   public function about_us(){
		
	    $this->load->view('header');
   		$this->load->view('about');
        $this->load->view('footer');
   }
   public function blog_detail(){

	    
	    $this->load->view('header');
   		$this->load->view('blog_detail');
        $this->load->view('footer');

   }
   public function blog(){

	    
	    $this->load->view('header');
   	    $this->load->view('blog');
        $this->load->view('footer');

   }
   public function contact_us(){
	    
	    $this->load->view('header');
   		$this->load->view('contact_us');
        $this->load->view('footer');

   }
   public function enquiry(){
	    
	    $this->load->view('header');
   		$this->load->view('enquiry');
        $this->load->view('footer');

   }
   public function location(){

	    
	    $this->load->view('header');
   		$this->load->view('location');
        $this->load->view('footer');
   }
   public function location2(){

	    $this->load->view('header');
   		$this->load->view('location2');
        $this->load->view('footer');
   }
   public function login(){

	    $this->load->view('header');
   		$this->load->view('login');
        $this->load->view('footer');
   }
   public function product_detail(){
		$id=$this->uri->segment(2);
		//print_r($id);die;
	   $data['product'] = $this->Crud_model->getproductbyid($id);
	     //print_r($data['product']);die;
	    $this->load->view('header',$data);
   		$this->load->view('product_detail',$data);
        $this->load->view('footer',$data);
   }
   public function signup(){
	    
     	$this->load->view('header');
   	    $this->load->view('signup');
        $this->load->view('footer');
   }
   public function insert_signup(){
   		$data=[
				 
			'user_name'=>$this->input->post('name'),
			'user_dob'=>$this->input->post('birthdate'),
			'user_addresss'=>$this->input->post('address'),
			'user_email'=>$this->input->post('email'),
			'user_contact'=>$this->input->post('phone'),
			'user_password'=>$this->input->post('password'),
			'date'=>date('Y-m-d'),
		];
		//print_r($_POST);
		// die;
		$id = $this->Crud_model->insert_record($data);
		// print_r($data);
			
		redirect('login');
	}

	public function insertReview(){

	    $data=[
			'review_username'=> $this->input->post('name'),
			'review_email'=> $this->input->post('email'),
			'review_subject'=> $this->input->post('subject'),
			'review_message'=> $this->input->post('message'),
			'review_product_id'=>$this->input->post('product_id'),
			'review_rating_star'=>$this->input->post('rating'),
			'date'=>date('Y-m-d'),
		];
	    // print_r($_POST);
        // die;
	    $id = $this->Crud_model->insert_review($data);

		redirect($_SERVER['HTTP_REFERER']);
	}

	public function add_to_cart() {
        $this->load->library('cart');
		//print_r($_POST);die;
		$is_login = $this->session->userdata('is_logged_in'); 
        $product_id = $this->input->post('product_id');
		$qty = $this->input->post('quantity'); 
		$product = $this->db->select('*')->from('product_tbl')->where('id', $product_id)->get()->row();
        $price = $product->product_sales_price;
       
	
			
            $data = array(
                'id' => $product_id,
                'qty' => $qty,
                'price' => $price,
                'name' => rand(), 
            );
    
            $this->cart->insert($data);
            $cartItems = $this->cart->contents();
            // You can return the cart items as JSON or process them as needed
            echo json_encode(array('status' => 'success', 'cart_items' => $cartItems));
       
        
    }
	public function cart() {
		
   	    $this->load->view('header');
   	    $this->load->view('cart');
        $this->load->view('footer');													
	}

    
    
	public function update_cart() {
		$cartId = $this->input->post('cart_id');
		$quantity = $this->input->post('quantity');
			$data = array(
				'rowid' => $cartId,
				'qty'   => $quantity,
			);
			$this->cart->update($data);
			$cartItems = $this->cart->contents();
			echo 1;
			die;
       
    }

	public function remove_cart_item() {
        $cartId = $this->input->post('cart_id');
        $result = $this->Crud_model->removeCartItem($cartId);
		$is_login = $this->session->userdata('is_logged_in');
	

			$removed = $this->cart->remove($cartId);

			if ($removed) {
				$response = array(
					'status' => 'success',
					'message' => 'Item removed from cart.'
				);
			} else {
				$response = array(
					'status' => 'error',
					'message' => 'Failed to remove item from cart.'
				);
			}
	
			// Return a JSON response
			header('Content-Type: application/json');
			echo json_encode($response);
    }

	public function category_products(){
		$id=$this->uri->segment(2);
		//print_r($id);die;
	   $data['product'] = $this->Crud_model->getcategoryproductbyid($id);
	    //print_r($data['product']);die;
	    $this->load->view('header',$data);
   		$this->load->view('category_products',$data);
        $this->load->view('footer',$data);
   }
   public function profile()
   {
	  
	   $data['page'] = "profile";
        $user=$this->session->userdata('user_detail');
	   //print_r($user->id);die;
	   $data['user']= $this->db->select('*')->from('user_tbl')->where('id',$user->id)->get()->row();
	   //print_r($data['cart']);die;
	   $this->load->view('header',$data);
	   $this->load->view('profile',$data);
	   $this->load->view('footer',$data);

   }
   public function updateProfile($id) {
	 //print_r($_POST);die;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$contact = $this->input->post('contact');
		
		$data = array(
			'user_name' => $username,
			'user_password' => $password,
			'user_contact' => $contact,
			'modified_date' => date('Y-m-d'),
		);
		// Update the product data
		$this->Crud_model->updateProfile($id,$data);

		$user_data = array(
			'id' => $id,
			'user_name' => $username,
			'user_contact' => $contact,
		);
		$this->session->set_userdata($user_data);

		redirect('Base/profile');
	}

	public function checkout() {
		
   	    $this->load->view('checkout');
        $this->load->view('footer');													
	}

    public function insertOrder()
    {

        // print_r($_POST);die;
    	$this->load->library('cart');
        $cart = $this->cart->contents();
        $total_price = 0;
		$total_qty = 0;

		foreach ($cart as $item) {
		    $price = $item['price'];
		    $total_qty += $item['qty'];
		    $total_price += $price * $item['qty'];
		}
    	
    	$name = $this->input->post('name');
    	$contact = $this->input->post('contact');
    	$email = $this->input->post('email');
    	$address = $this->input->post('address');
    	$zip = $this->input->post('zip');
    	$location = $this->input->post('location');
        $delivery_type = $this->input->post('delivery_type');

        if($delivery_type == "Take away") {

				$data = array(
					'delivery_type'=> $delivery_type,
					'name' => $name,
					'contact' => $contact,
				    'email' => $email,
				    'location' => $location,
				    'total_price' => $total_price,
				    'total_qty' => $total_qty,
					'date' => date('Y-m-d'),
				);
        }else{
        	$data = array(
        		    'delivery_type'=> $delivery_type,
			        'name' => $name,
					'contact' => $contact,
				    'email' => $email,
					'date' => date('Y-m-d'),
					'address' => $address,
					'zip' => $zip,
					'total_price' => $total_price,
				    'total_qty' => $total_qty,
					'date' => date('Y-m-d'),
				);
        }
		
		$id = $this->Crud_model->insertOrder($data);
        // print_r($id);die;

// 		$this->load->library('cart');
//         $cartItems = $this->cart->contents();
       
//         if (!empty($cartItems)) {
//             foreach ($cartItems as $item) {

//             $product = $this->db->select('*')->from('product_tbl')->where('id', $item['id'])->get()->row();
//             $price = $product->product_sales_price;
//             $qty = $item['qty'];
           
//             $data = array(
//             	    'order_id' => $id,
// 	                'product_id'  => $product->id,
// 	                'cart_qty'  => $qty,
// 	                'product_price'   => $price,
// 	                'date' => date('Y-m-d'),
//                 );   
//              //print_r($data);die;
//              $cart_id = $this->Crud_model->insertCart($data);
//                   //print_r($id);die;
      
//                 }
//             }
// >

        if(!empty($cart)){
        	foreach ($cart as $row) {
        		// print_r($row);
        		  $product = $this->db->select('*')->from('product_tbl')->where('id', $row['id'])->get()->row();
                  $price = $product->product_sales_price;
                  $qty = $row['qty'];
           
        		//print_r($product);
        		$data = array(
					'order_id' => $id,
					'product_id' => $product->id,
					'product_qty' => $qty,
					'product_price'   => $price,
					'date' => date('Y-m-d'),
				);
              $p_id = $this->Crud_model->insertProductOrder($data);
              
        	}
        }
        $this->load->library('cart');
        $this->cart->destroy();
        $this->session->set_userdata('customer_mobile',$contact);
		redirect('Base/order_success?id='.$id);
    }


    /*order_success*/
    public function order_success()
    {
    	$data['page'] = "profile";
        $user=$this->session->userdata('user_detail');
	    $data['user']= $this->db->select('*')->from('user_tbl')->where('id',$user->id)->get()->row();
	    $this->load->view('header',$data);
	    $this->load->view('order_success',$data);
	    $this->load->view('footer',$data);
    }
    /*get_userdetails*/
    public function get_userdetails()
    {
    	$mobile = $this->input->post('mobile');
    	$data = $this->db->where('contact',$mobile)->order_by('id','desc')->get('order_tbl')->row();
    	echo json_encode($data); 
    }

    /*all_orders*/
    public function all_orders()
    {
    	$data['page'] = "profile";
        $mobile=$this->session->userdata('customer_mobile');
	    $data['orders']= $this->db->select('*')->from('order_tbl')->where('contact',$mobile)->get()->result();
	    $this->load->view('header',$data);
	    $this->load->view('all_orders',$data);
	    $this->load->view('footer',$data);
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

}

   ?>