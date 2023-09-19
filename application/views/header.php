
<?php
$is_login = $this->session->userdata('is_logged_in');
														

	$this->load->library('cart');
    $cartItems = $this->cart->contents();
    // print_r($cartItems);
    
	$totalQuantity = count($cartItems);

?>

<!DOCTYPE html>
<html lang="en">

<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>CSVTU Forte Haat</title>
		<link rel="shortcut icon" href="<?= base_url()?>assets/images/logo/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?= base_url()?>assets/images/logo/favicon.ico" type="image/x-icon">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.min.css">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/fontawesome.css">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/animate.css">

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/nice-select.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/slick-theme.css">

		<!-- popup images & videos - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/magnific-popup.css">

		<!-- jquery ui - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/jquery-ui.css">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style1.css">

		<!-- font awesome links -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	
	<style>
		.user-info-dropdown .dropdown-toggle .user-icon {
			width: 40px;
			height: 40px;
			font-size: 24px;
			text-align: center;
			background: #ebeff3;
			text-align: center;
			display: inline-block;
			vertical-align: middle;
			border-radius: 100%;
			-webkit-box-shadow: 0 0 10px rgb(0 0 0 / 18%);
			box-shadow: 0 0 10px rgb(0 0 0 / 18%);
		}
		.user-info-dropdown .user-name{
			color:white;
			font-weight: 400;
		}
		.user-info-dropdown .fa{
			color:#47b2e4;
		}
		.border-radius-100, .user-info-dropdown .dropdown-toggle .user-icon img {
			border-radius: 100%;
		}

		img {
			border: 0;
			vertical-align: top;
			max-width: 100%;
			height: auto;
		}
		.user-info-dropdown-moblie a{
			color:black;
			font-weight: 400;
		}
		.user-info-dropdown-moblie .fa{
			color:white;
		}
		.user-info-dropdown-moblie .dropdown-toggle .user-icon {
			width: 30px;
			height: 30px;
			font-size: 18px;
			text-align: center;
			background: black;
			text-align: center;
			display: inline-block;
			vertical-align: middle;
			border-radius: 100%;
			-webkit-box-shadow: 0 0 10px rgb(0 0 0 / 18%);
			box-shadow: 0 0 10px rgb(0 0 0 / 18%);
		}
        .action_btns_group li button a{
            color: #373333;
            font-size: 15px;
            font-weight: 700;
            padding: 10px 0px;
        }
		.user-info-dropdown .dropdown-toggle .user {
			color: white;
		}
	</style>
	
</head>


<body class="home_supermarket">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_supermarket_red" >
			<a href="#" class="scroll">
				<i class="far fa-arrow-up" ></i>
			</a>
		</div>
		<!-- backtotop - end -->


		<!-- header_section - start
		================================================== -->
		<header class="header_section supermarket_header bg-white clearfix">
			<div class="header_top text-white clearfix">
				<div class="container maxw_1460">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-5_mb">
							<p class="welcome_text mb-0">Welcome to CSVTU Forte Haat Store</p>
						</div>
						<div class="col-lg-7">
							<?php 
								if ($this->session->userdata('customer_mobile')) 
								{
									$url = base_url()."base/all_orders/";
								}
								else
								{
									$url = "#";
								}
							?>
							<ul class="info_list ul_li_right right1 clearfix">
								<li><a href="<?= $url ?>"><i class="fal fa-truck"></i>  Your Order</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>

			

			<div class="header_middle clearfix">
				<div class="container maxw_1460">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-3">
							<div class="brand_logo">
								<a class="brand_link" href="<?= base_url()?>index">
									<img src="<?= base_url()?>assets/images/logo/logo.png" alt="logo_not_found">
								</a>

								<ul class="mh_action_btns ul_li clearfix">
								
										
										
								
									<li>
										<button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
											<i class="fal fa-search"></i>
										</button>
									</li>
									     
									<li >
										<div id="cart_value" class="cart_value"><button type="button" class="cart_btn">
											<i class="fal fa-shopping-cart"></i>
											
										
											<span class="btn_badge" id="cart-quantity-badge"><?= $totalQuantity ?></span>
										
										</button></div>
									</li>
									<li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<!-- here the role action are changed in header.php -->
							<form  role="form" method="get" action="<?php echo base_url('SearchController');?>">
								<div class="medical_search_bar">
									<div class="form_item">
										<input type="search" name="search" placeholder="search here...">
									</div>
									<div class="option_select mb-0">
										<select>
											<option data-display="All Category">Select A Option</option>
											<?php 
												$category = $this->db->select('*')->from('category_tbl')->where('status',1)->get()->result();
												if (!empty($category)) {
													foreach ($category as $row) {
													
											?>
											<option value="<?= $row->id ?>"><?= $row->category_name ?></option>
										<?php } } ?>
									
										</select>
									</div>
									<button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
								</div>
							</form>
						</div>

						<div class="col-lg-3">
							<div class="supermarket_header_btns clearfix">
								<ul class="action_btns_group right1 ul_li_right clearfix">
									
									<li id="cart">
									<div  class="cart_value1">	<button type="button" class="cart_btn" onclick="add_class()">
											<i class="fal fa-shopping-bag"></i>
											
											<span class="btn_badge" id="cart-quantity-badge"><?= $totalQuantity ?></span>
										</button></div>
									</li>
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="header_bottom clearfix">
				<div class="container maxw_1460">
					<nav class="main_menu clearfix">
						<ul class="ul_li clearfix">
						  <?php
								$is_login = $this->session->userdata('is_logged_in');
								// print_r($is_login);
								// die;
								if($is_login === true){ ?>

							<li>
								<button class="alldepartments_btn bg_supermarket_red text-uppercase" type="button" data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false" aria-controls="alldepartments_dropdown">
									<i class="far fa-bars"></i> Category
								</button>
							</li>
							<li class="">
								<a href="<?=base_url()?>index">Home</a>
							</li>
							<li class="">
								<a href="<?=base_url()?>about_us">About Us</a>
							</li>
							<li class="">
								<a href="<?=base_url()?>blog">Blog</a>
							</li>
							<li class="menu_item_has_child">
								<a href="#">Location</a>
								<ul class="submenu">
									
									<li><a href="<?=base_url()?>location">CSVTU-CAMPUS</a></li>
									<li><a href="<?=base_url()?>location2">BIT-CAMPUS</a></li>
								</ul>
							</li>
							
							<li class="">
								<a href=#>Recipes</a>
							</li>
							<li class="">
								<a href="<?=base_url()?>contact_us">Contact</a>
							</li>
							
							<li class="">
								<a href="https://csvtuforte.com/">CSVTU Forte</a>
							</li>
								<?php }else{ ?>
									<li>
								<button class="alldepartments_btn bg_supermarket_red text-uppercase" type="button" data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false" aria-controls="alldepartments_dropdown">
									<i class="far fa-bars"></i> Category
								</button>
							</li>
							<li class="">
								<a href="<?=base_url()?>index">Home</a>
							</li>
							<li class="">
								<a href="<?=base_url()?>about_us">About Us</a>
							</li>
							<li class="">
								<a href="<?=base_url()?>blog">Blog</a>
							</li>
							<li class="menu_item_has_child">
								<a href="#">Location</a>
								<ul class="submenu">
									
									<li><a href="<?=base_url()?>location">CSVTU-CAMPUS</a></li>
									<li><a href="<?=base_url()?>location2">BIT-CAMPUS</a></li>
								</ul>
							</li>
							
							<li class="">
								<a href=#>Recipes</a>
							</li>
							<li class="">
								<a href="<?=base_url()?>contact_us">Contact</a>
							</li>
							
							<li class="">
								<a href="<?=base_url()?>signup">Register</a>
							</li>
							
							<li class="">
								<a href="https://csvtuforte.com/">CSVTU Forte</a>
							</li>
								<?php } ?>
							
						</ul>
					</nav>
				</div>
			</div>

			<div id="search_body_collapse" class="search_body_collapse collapse">
				<div class="search_body">
					<div class="container-fluid prl_90">
						<form action="#">
							<div class="form_item mb-0">
								<input type="search" name="search" placeholder="Type here...">
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main>


			<!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				<div class="cart_sidebar" >
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<ul class="cart_items_list ul_li_block mb_30 clearfix cart_data ">
							<?php
							$totalQuantity = 0;
							$price = 0;
							$totalPrice = 0;
							$i = 0;
                            if($is_login === true  AND $is_login === false ){

                                if (!empty($cart)) {
                                    foreach ($cart as $row) { 
                                        $i++;
                                        $product = $this->db->select('*')->from('product_tbl')->where('id',$row->product_id)->get()->row();
                                        $id = $product->id;
        
                                        // Fetch product images using the database query
                                        $query = $this->db->select('product_image')
                                                        ->where('id', $id)
                                                        ->get('product_tbl'); 
                                
                                        if ($query->num_rows() > 0) {
                                            $result = $query->row_array();
                                
                                            // Explode the comma-separated image URLs into an array
                                            $imageUrls = explode(',', $result['product_image']);
                                            //print_r($imageUrls);die;
                                
                                        }
                                        $totalQuantity += $row->cart_qty;
                                        
                                        $totalPrice += ($row->cart_qty * $row->product_price);
                                        
                                ?>
								<input type="hidden" id="id<?=$i?>" value="<?= $row->id ?>">
                                <li>
                                    <div class="item_image">
                                        <img src="<?= base_url()?>admin/<?=$imageUrls[0]?>" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title"><?= $product->product_name?></h4>
                                        <span class="item_price"><i class="fa fa-inr" aria-hidden="true"></i><?= $product->product_sales_price?></span>
                                    </div>
                                    <button type="button" class="remove_btn" onclick="removeCartItem(<?=$i?>)" ><i class="fal fa-trash-alt"></i></button>
                                </li>
                             <?php } }  
                            }else{
                                 if (!empty($cartItems)) {
                                    foreach ($cartItems as $item) {
                                        
                                        $i++;
                                        $product = $this->db->select('*')->from('product_tbl')->where('id',$item['id'])->get()->row();
                                        $id = $product->id;
        
                                        // Fetch product images using the database query
                                        $query = $this->db->select('product_image')
                                                        ->where('id', $id)
                                                        ->get('product_tbl'); 
                                
                                        if ($query->num_rows() > 0) {
                                            $result = $query->row_array();
                                
                                            // Explode the comma-separated image URLs into an array
                                            $imageUrls = explode(',', $result['product_image']);
                                            //print_r($imageUrls);die;
                                
                                        }
                                        $totalQuantity += $item['qty'];
										
										$totalPrice += ($item['qty'] * $product->product_sales_price);
                                        
                                ?>
								<input type="hidden" id="id<?=$i?>" value="<?=  $item['rowid']  ?>">
                                <li>
                                    <div class="item_image">
                                        <img src="<?= base_url()?>admin/<?=$imageUrls[0]?>" alt="image_not_found">
                                    </div>
                                    <div class="item_content">
                                        <h4 class="item_title"><?= $product->product_name?></h4>
                                        <span class="item_price"><i class="fa fa-inr" aria-hidden="true"></i><?= $product->product_sales_price?></span>
                                    </div>
                                    <button type="button" class="remove_btn" onclick="removeCartItem(<?=$i?>)" ><i class="fal fa-trash-alt"></i></button>
                                </li>
                                <?php } }
                            }
						
                            ?>
					</ul>

					<ul class="total_price ul_li_block mb_30 clearfix cart_data2">
						<li>
							<span>Subtotal:</span>
							<span><i class="fa fa-inr" aria-hidden="true"></i><?= $totalPrice?></span>
						</li>
						<li>
							<span>Vat 0%:</span>
							<span><i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
						</li>
						<li>
							<span>Discount 00%:</span>
							<span>- <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
						</li>
						<li>
							<span>Total:</span>
							<span><i class="fa fa-inr" aria-hidden="true"></i><?= $totalPrice?></span>
						</li>
					</ul>

					<ul class="btns_group ul_li_block clearfix">
						<li><a href="<?= base_url() ?>cart">View Cart</a></li>
						<li><a href="<?= base_url() ?>checkout">Checkout</a></li>
					</ul>
				</div>

				<div class="sidebar_mobile_menu">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<div class="msb_widget brand_logo text-center">
						<a href="<?= base_url()?>index">
							<img src="<?= base_url()?>assets/images/logo/logo.png" alt="logo_not_found">
						</a>
					</div>

					<div class="msb_widget mobile_menu_list clearfix">
						<h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
						<ul class="ul_li_block clearfix">
						<li class="active"><a href="<?= base_url()?>index">Home</a></li>

					<li class="active"><a href="<?=base_url()?>about">About Us</a></li>
					<li class="active"><a href="<?=base_url()?>blog">Blog</a></li>

					<li class="menu_item_has_child">
						<a href="#">Location</a>
						<ul class="submenu">
		
							<li><a href="<?=base_url()?>location">CSVTU-CAMPUS</a></li>
							<li><a href="<?=base_url()?>location2">BIT-CAMPUS</a></li>
						</ul>
					</li>
					<li class="active"><a href="#">Recipes</a></li>


					<li class="active"><a href="<?=base_url()?>contact_us">Contact</a></li>
					<?php
								$is_login = $this->session->userdata('is_logged_in');
								// print_r($is_login);
								// die;
								if($is_login === true){ ?>
					
					<?php }else{ ?>
                        <li class="active"><a href="<?=base_url()?>signup">Register</a></li>
                        <?php }?>
					<li class="active"><a href="https://csvtuforte.com/">CSVTU Forte</a></li>
						</ul>
					</div>

					<!-- <div class="user_info">
						<h3 class="title_text mb_30 text-uppercase"><i class="fas fa-user mr-2"></i> User Info</h3>
						<div class="profile_info clearfix">
							<div class="user_thumbnail">
								<img src="<?= base_url()?>assets/images/meta/img_01.png" alt="thumbnail_not_found">
							</div>
							<div class="user_content">
								<h4 class="user_name">Jone Doe</h4>
								<span class="user_title">Seller</span>
							</div>
						</div>
						<ul class="settings_options ul_li_block clearfix">
							<li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
							<li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
							<li><a href="#!"><i class="fal fa-sign-out-alt"></i> Logout</a></li>
						</ul>
					</div> -->
				</div>

				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu & sidebar cart - end
			================================================== -->

<script>
	function removeCartItem(i) {
		// alert("hii");
		var cartId = $('#id'+i).val(); 
		// alert(cartId);
		$.ajax({
			type: "POST",
			url: "<?= base_url() ?>Base/remove_cart_item", // Update the URL to the correct controller method
			data: {
				cart_id: cartId
			},
			success: function(response) {
				if (response.status === "success") {
					console.log(response.message);
					// $("#cart_value").load(location.href+" #cart_value>*","");
					$(".cart_value1").load(location.href + " .cart_value1");
					$(".cart_data").load(location.href + " .cart_data");
					$(".cart_data2").load(location.href + " .cart_data2");
				} else {
					// console.error(response.message);
				}
			},
			error: function(xhr, status, error) {
				// console.error("AJAX Error:", error);
			}
		});
	}
	function add_class() 
	{
		$('.cart_sidebar').addClass('cart_sidebar active');
		$('.overlay ').addClass('overlay  active');
	}
</script>