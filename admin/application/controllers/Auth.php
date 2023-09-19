<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    protected function require_login()
    {
        $user=$this->session->userdata('user_id');
        $data['user_details'] = $this->Login_model->admin_details($user);
        if(!empty($data['user_details']))
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

    public function addbanner() {
        $banner_id = $this->input->post('banner_id');
        

        $banner_name = $this->input->post('banner_name');
                
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
    
        $this->upload->initialize($config);
    
        // Fetch the existing category data if updating
        $existing_category = $this->Base_model->getbannerbyId($banner_id);
    
        // Check if the uploaded image field is empty and it's an update operation
        if (empty($_FILES['banner_image']['name']) && !empty($existing_banner)) {
            // If no new image provided in update, keep the existing image
            $data = array(
                'banner_name' => $banner_name,
                'date' => date('Y-m-d')
            );

        } else {
            // Handle image upload and update data
            if ($this->upload->do_upload('banner_image')) {
                $data = array(
                    'banner_image' => $this->upload->data('file_name'),
                    'banner_name' => $banner_name,
                    'date' => date('Y-m-d')
                );
                
            } else {
                // Error handling for image upload
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('inc/header', $error);
                $this->load->view('Base/banner', $error);
                $this->load->view('inc/footer', $error);
                return;
            }
        }
    
        // Check if $edit_category is empty to determine whether to insert or update
        if (empty($banner_id)) {
            // Insert the new category name in the database
            $id = $this->Base_model->insertbanner($data);
        } else {
            // Update the category name in the database using the model
            $this->Base_model->updatebanner($banner_id, $data);
        }
    
        redirect('Auth/allbanner');
    }

    public function allbanner($id= "")
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "banner";
        $data['banner'] = $this->Base_model->allbanner();
        $data['edit_banner'] = $this->Base_model->view_banner($id);

        $this->load->view('inc/header',$data);
        $this->load->view('Base/banner',$data);
        $this->load->view('inc/footer',$data);

    }
    public function updatebannerStatus()
    {
        //echo"hii";die;
      $this->require_login();

        $bannerId = $this->input->post('bannerId');
        $status = $this->input->post('status');
       $data = array(
            'status' => $status,
        );
        $id = $this->Base_model->updatebannerStatus($bannerId, $data);          
    }

    public function allCategory($id= "")
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "category";
        $data['category'] = $this->Base_model->allCategory();
        $data['edit_category'] = $this->Base_model->view_category($id);

        $this->load->view('inc/header',$data);
        $this->load->view('Base/category',$data);
        $this->load->view('inc/footer',$data);

    }

    public function addCategory() {
        $category_id = $this->input->post('category_id');
        $category_name = $this->input->post('category_name');
                
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
    
        $this->upload->initialize($config);
    
        // Fetch the existing category data if updating
        $existing_category = $this->Base_model->getCategorybyId($category_id);
    
        // Check if the uploaded image field is empty and it's an update operation
        if (empty($_FILES['category_image']['name']) && !empty($existing_category)) {
            // If no new image provided in update, keep the existing image
            $data = array(
                'category_name' => $category_name,
                'date' => date('Y-m-d')
            );
        } else {
            // Handle image upload and update data
            if ($this->upload->do_upload('category_image')) {
                $data = array(
                    'category_image' => $this->upload->data('file_name'),
                    'category_name' => $category_name,
                    'date' => date('Y-m-d')
                );
            } else {
                // Error handling for image upload
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('inc/header', $error);
                $this->load->view('Base/category', $error);
                $this->load->view('inc/footer', $error);
                return;
            }
        }
    
        // Check if $edit_category is empty to determine whether to insert or update
        if (empty($category_id)) {
            // Insert the new category name in the database
            $id = $this->Base_model->insertCategory($data);
        } else {
            // Update the category name in the database using the model
            $this->Base_model->updateCategory($category_id, $data);
        }
    
        redirect('Auth/allCategory');
    }

    
    public function updateCategoryStatus()
    {
        //echo"hii";die;
      $this->require_login();

        $categoryId = $this->input->post('categoryId');
        $status = $this->input->post('status');
       $data = array(
            'status' => $status,
        );
        $id = $this->Base_model->updateCategoryStatus($categoryId,$data);          
    }

    public function addProduct()
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "add_product";
        $data['category'] = $this->Base_model->getCategory();

        $this->load->view('inc/header',$data);
        $this->load->view('Product/add_product',$data);
        $this->load->view('inc/footer',$data);

    }

    public function insertProduct() {
           //print_r($_POST);die;
            $product_id = $this->input->post('product_id');
            $product_name = $this->input->post('product_name');
            $product_category_id = $this->input->post('product_category_id');
            $product_regular_price = $this->input->post('product_regular_price');
            $product_sales_price = $this->input->post('product_sales_price');
            $product_weight = $this->input->post('product_weight');
            $product_stock_status = $this->input->post('product_stock_status');
            $product_description = $this->input->post('product_description');
            $product_video_path = $this->input->post('product_video');
            

            $image_paths = [];
        if (!empty($_FILES['product_image']['name'][0])) {
            $config['upload_path'] = './assets/uploads/'; 
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048; 
            //print_r("hii");die;
            //$this->load->library('upload', $config);
            $this->upload->initialize($config);
            foreach ($_FILES['product_image']['name'] as $key => $image_name) {
                $_FILES['userfile']['name'] = $image_name;
                $_FILES['userfile']['type'] = $_FILES['product_image']['type'][$key];
                $_FILES['userfile']['tmp_name'] = $_FILES['product_image']['tmp_name'][$key];
                $_FILES['userfile']['error'] = $_FILES['product_image']['error'][$key];
                $_FILES['userfile']['size'] = $_FILES['product_image']['size'][$key];

                if ($this->upload->do_upload('userfile')) {
                    $image_paths[] = './assets/uploads/' . $this->upload->data('file_name');
                }
            }
        }

        $data = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_category_id' => $product_category_id,
            'product_regular_price' => $product_regular_price,
            'product_sales_price' => $product_sales_price,
            'product_weight' => $product_weight,
            'product_stock_status' => $product_stock_status,
            'product_description' => $product_description,
            'product_video' => $product_video_path,
            'product_image' => implode(',', $image_paths), 
            'date' => date('Y-m-d')
        );
       //print_r($data);die;
        $id = $this->Base_model->insert_product($data); 
        
       
        redirect('Auth/allProduct'); 
    }

    public function allProduct()
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "product_list";
        $data['product'] = $this->Base_model->getProductlist();

        $this->load->view('inc/header',$data);
        $this->load->view('Product/product_list',$data);
        $this->load->view('inc/footer',$data);

    }

    public function view_product($id)
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "view_product";
        $data['product'] = $this->Base_model->getProduct($id);
        $data['image_paths'] = $this->Base_model->get_product_images($id);

        $this->load->view('inc/header',$data);
        $this->load->view('Product/view_product',$data);
        $this->load->view('inc/footer',$data);

    }

    public function edit_product($id)
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "view_product";
        $data['product'] = $this->Base_model->getProduct($id);
        $data['image_paths'] = $this->Base_model->get_product_images($id);
        $data['allcategory'] = $this->Base_model->getCategory();

        $this->load->view('inc/header',$data);
        $this->load->view('Product/edit_product',$data);
        $this->load->view('inc/footer',$data);

    }
    public function delete_product($product_id) {
        $this->Base_model->deleteProduct($product_id); 
        redirect('Auth/allProduct'); 
    }

    public function updateProduct($id) {
        $product_id = $this->input->post('product_id');
        $product_name = $this->input->post('product_name');
        $product_category_id = $this->input->post('product_category');
        $product_regular_price = $this->input->post('product_regular_price');
        $product_sales_price = $this->input->post('product_sales_price');
        $product_weight = $this->input->post('product_weight');
        $product_stock_status = $this->input->post('product_stock_status');
        $product_description = $this->input->post('product_description');
        $product_video_path = $this->input->post('product_video');
        
        // Fetch the existing product data
        $existing_product = $this->Base_model->getProduct($id);
        
        if (!empty($_FILES['product_image']['name'][0])) {
            // Upload and update images
            $uploaded_image_paths = [];
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 2048;
            
            $this->load->library('upload', $config);
            
            foreach ($_FILES['product_image']['name'] as $key => $image_name) {
                $_FILES['userfile']['name'] = $image_name;
                $_FILES['userfile']['type'] = $_FILES['product_image']['type'][$key];
                $_FILES['userfile']['tmp_name'] = $_FILES['product_image']['tmp_name'][$key];
                $_FILES['userfile']['error'] = $_FILES['product_image']['error'][$key];
                $_FILES['userfile']['size'] = $_FILES['product_image']['size'][$key];
    
                if ($this->upload->do_upload('userfile')) {
                    $uploaded_image_paths[] = 'uploads/' . $this->upload->data('file_name');
                }
            }
            
            // Update the product images with the newly uploaded images
            $image_paths = $uploaded_image_paths;
        } else {
            // No new images selected, keep the existing images
            $image_paths = explode(',', $existing_product->product_image);
        }
        
        $data = array(
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_category_id' => $product_name,
            'product_regular_price' => $product_regular_price,
            'product_sales_price' => $product_sales_price,
            'product_weight' => $product_weight,
            'product_stock_status' => $product_stock_status,
            'product_description' => $product_description,
            'product_video' => $product_video_path,
            'product_image' => implode(',', $image_paths), 
            'modified_date' => date('Y-m-d'),
        );
        // Update the product data
        $this->Base_model->updateProduct($id, $data);
        
        redirect('Auth/allProduct'); // Redirect to the product list page
    }

    // ########### User #############

    public function addUser()
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "add_user";
       
        $this->load->view('inc/header',$data);
        $this->load->view('Base/add_user',$data);
        $this->load->view('inc/footer',$data);

    }

    public function insertUser() {
        //print_r($_POST);die;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $contact = $this->input->post('contact');
         $role = $this->input->post('role');
         $email = $this->input->post('email');
         $app_name = $this->input->post('app_name');
         $data = array(
            'username' => $username,
            'app_Name' => $app_name,
            'password' => $password,
            'contact' => $contact,
            'role' => $role,
            'email' => $email,
            'date' => date('Y-m-d'),
        );
        // Update the product data
        $id = $this->Base_model->insertUser($data);
        redirect('Auth/addUser');
    }
    public function allUser()
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "user_list";
        $data['user'] = $this->Base_model->getUser();

        $this->load->view('inc/header',$data);
        $this->load->view('Base/user_list',$data);
        $this->load->view('inc/footer',$data);

    }
    public function edit_user($id)
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "view_product";
        $data['user'] = $this->Base_model->getUserById($id);
      
        $this->load->view('inc/header',$data);
        $this->load->view('Base/edit_user',$data);
        $this->load->view('inc/footer',$data);

    }
    public function updateUser($id) {
        $username = $this->input->post('username');
         $password = $this->input->post('password');
         $contact = $this->input->post('contact');
         $role = $this->input->post('role');
         $email = $this->input->post('email');
         $app_name = $this->input->post('app_name');
         $data = array(
            'username' => $username,
            'app_Name' => $app_name,
            'password' => $password,
            'contact' => $contact,
            'role' => $role,
            'email' => $email,
            'modified_date' => date('Y-m-d'),
        );
        // Update the product data
        $id = $this->Base_model->upadateUser($id,$data);
        redirect('Auth/allUser');
    }
    public function delete_user($id) {
        $this->Base_model->deleteUser($id); 
        redirect('Auth/allUser'); 
    }

    // ######### profile #########
    public function profile()
    {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "user_list";
       // $data['user'] = $this->Base_model->getUser();

        $this->load->view('inc/header',$data);
        $this->load->view('Base/profile',$data);
        $this->load->view('inc/footer',$data);

    }
    public function updateProfile($id) {
        $username = $this->input->post('username');
         $password = $this->input->post('password');
         $email = $this->input->post('email');
        
         $data = array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'modified_date' => date('Y-m-d'),
        );
        // Update the product data
        $this->Base_model->updateProfile($id,$data);

        $user_data = array(
            'user_id' => $id,
            'username' => $username,
            'email' => $email,
        );
        $this->session->set_userdata($user_data);

        redirect('Auth/profile');
    }
    public function allorder()
    {
         // echo"hii";die;
        $this->require_login();
        $data['page'] = "order_lis";
        $data['order'] = $this->Base_model->getOrderlist();

        $this->load->view('inc/header',$data);
        $this->load->view('Order/order_list',$data);
        $this->load->view('inc/footer',$data);

    }
     public function pending_order()
    {
         // echo"hii";die;
        $this->require_login();
        $data['page'] = "pending_order";
        
        $this->load->view('inc/header',$data);
        $this->load->view('Order/pending_order',$data);
        $this->load->view('inc/footer',$data);

    }
     public function completed_order()
    {
         // echo"hii";die;
        $this->require_login();
        $data['page'] = "completed_order";
        
        $this->load->view('inc/header',$data);
        $this->load->view('Order/completed_order',$data);
        $this->load->view('inc/footer',$data);

    }
     public function cancel_order()
    {
         // echo"hii";die;
        $this->require_login();
        $data['page'] = "cancel_order";
        
        $this->load->view('inc/header',$data);
        $this->load->view('Order/cancel_order',$data);
        $this->load->view('inc/footer',$data);

    }

   public function view_order($id)
   {
        // echo"hii";die;
        $this->require_login();
        $data['page'] = "view_order";
        $data['order'] = $this->Base_model->getOrderById($id);
       
        $this->load->view('inc/header',$data);
        $this->load->view('Order/view_order',$data);
        $this->load->view('inc/footer',$data);

    }
    public function update_order_status() 
    {
        $order_id = $this->input->post('order_id');
        $status = $this->input->post('status');
       $data = array(
            'status' => $status,
        );
        $id = $this->Base_model->upadateOrder($order_id,$data);
        
    $response = array('status' => 'success', 'message' => 'Order status updated.');
    echo json_encode($response);
    }

}