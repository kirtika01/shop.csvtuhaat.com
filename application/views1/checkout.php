<?php
// echo 1;
// die;
$is_login = $this->session->userdata('is_logged_in');
														
if($is_login === true){
$userdetail=$this->session->userdata('user_detail');
$cart = $this->db->select('*')->from('cart_tbl')->where('user_id',$userdetail->id)->get()->result();
}else{
	$this->load->library('cart');
    $cartItems = $this->cart->contents();
	$numRows = count($cartItems);
    //print_r($cartItems);
    $totalQuantity = 0;

    foreach ($cartItems as $item) {
        $totalQuantity += $item['qty'];
    }
}
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
        .border.rounded.bg-light {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .offset-md-1{
            padding: 15px;
        }
        .quantity_input{
        	height: 30px;
        	width:85%;
		    padding: 0px 20px;
		    text-align: center;
		    align-items: center;
		    border-radius: 45px;
		    display: inline-flex;
		    justify-content: center;
		    border: 2px solid #eceef2;
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
							<ul class="info_list ul_li_right right1 clearfix">
								<li><a href="#!"><i class="fal fa-truck"></i> Track Your Order</a></li>
							</ul>
						</div>
						<?php
							$is_login = $this->session->userdata('is_logged_in');
							// print_r($is_login);
							// die;
							if($is_login === true){ 
								$user = $this->db->select('*')->from('user_tbl')->where('id',$userdetail->id)->get()->row();
								?>
								<div class="user-info-dropdown" style="display:flex;">
								    <div class="dropdown" style="display:flex;"> 
										<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"> 
											<span class="user-icon text-center">
												<i class="fa fa-user text-center"></i>
											</span> <span class="user-name" styel="color:black;font-weight: 400;"><?= $user->user_name ?></span> 
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"> 
											<a class="dropdown-item" href="<?= base_url('Base/profile') ?>"><i class="dw dw-user1"></i> Profile</a>
											<a class="dropdown-item" href= "<?php echo site_url('Dashboard/logout'); ?>"><i class="dw dw-logout"></i> Log Out</a>
										</div>
									</div>
								</div>
							<?php } ?>
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
								
										<?php	
											$is_login = $this->session->userdata('is_logged_in');
											// print_r($is_login);
											// die;
											if($is_login === true){ ?>
                                            <li>
												<div class="user-info-dropdown-moblie" style="display:flex;">
													<div class="dropdown" style="display:flex;"> 
														<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"> 
															<span class="user-icon text-center">
																<i class="fa fa-user text-center"></i>
															</span> <span class="user-name-mobile" styel="color:black;font-weight: 400;"><?= $user->user_name ?></span> 
														</a>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"> 
															<a class="dropdown-item" href="<?= base_url('Base/profile') ?>"><i class="dw dw-user1"></i> Profile</a>
															<a class="dropdown-item" href= "<?php echo site_url('Dashboard/logout'); ?>"><i class="dw dw-logout"></i> Log Out</a>
														</div>
													</div>
												</div>
                                            </li>
										<?php } else{ ?>
					                      <li class="active"><a href="<?=base_url()?>login" style="  color: #373333;font-size: 15px;font-weight: 700;padding: 10px 0px;margin-top:-5px;">Login</a></li>
                                        <?php }?>
										
								
									<li>
										<button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
											<i class="fal fa-search"></i>
										</button>
									</li>
									     
									<li>
										<button type="button" class="cart_btn">
											<i class="fal fa-shopping-cart"></i>
											<span class="btn_badge" id="cart-quantity-badge"><?= $totalQuantity ?></span>
										</button>
									</li>
									<li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<form action="#">
								<div class="medical_search_bar">
									<div class="form_item">
										<input type="search" name="search" placeholder="search here...">
									</div>
									<div class="option_select mb-0">
										<select>
											<option data-display="All Category">Select A Option</option>
											<option value="Groceries">Groceries</option>
											<option value="CG Cuisine's">CG Cuisine's</option>
											<option value="Art & Craft of CG">Art & Craft of CG</option>
											<option value="Other Rural Enterprises">Other Rural Enterprises</option>
										</select>
									</div>
									<button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
								</div>
							</form>
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

<!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				

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

				
				</div>

				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu & sidebar cart - end
			================================================== -->
		<!-- main body - start
		================================================== -->
		<main>

<body class="bg-light">


	<div class="container-fluid">
    	<div class="row px-5">
    		<div class="col-md-7">
           		<div class="shopping-cart">
            	
	               <h2></h2>
					<br><br>
	               
                    <div class="border rounded bg-light">
                   
                       <div class="row">
                       	   <div class="col-md-1"></div>
                       	   <div class="col-md-10" style="padding:20px;margin:10px;">
	                       	   <h1>Delivery</h1>
	                             <br>
	                    	    <form action="<?= base_url('Base/insertOrder') ?>" method="post">
							        <div style="display:flex;margin-top:-12px;">
							        	 <div class="col-md-4">
		                                       <input type="radio"  onchange="check_type()"  id="take_away" name="delivery_type" value="Take away" style="cursor: pointer;" checked>
									          <label for="Take away"><b> Take away </b></label><br>
							        	 </div>
							        	 <div class="col-md-4">
									          <input type="radio" onchange="check_type()" id="delivery" name="delivery_type" value="Delivery" style="cursor: pointer;">
									         <label for="Delivery"><b>Delivery</b> </label><br>
							        	 </div>
							        	  <div class="col-md-4"></div>
							        </div>
	                       	  		<div class="row" id="location" style="display:;">
		                       	   		<div class="col-md-12">
		                       	   			<div id="csvtu">
		                       	   				<label class="form-label d-block">Location</label>
				                       	   	 	<select class="form-control" name="location">
				                       	   	 		<option>Select Location</option>
				                       	   	 		<option>CSVTU Campus</option>
				                       	   	 	</select>
		                       	   			</div>
			                       	    		
			                       	   	 	<br><br>
			                       	   	 	  <label class="d-block mb-4">
									          <span class="form-label d-block"><b>Mobile Number</b></span>
									          <input
									            name="contact"
										        id="contact-input"
										        type="text"
										        class="form-control"
										        maxlength="10"
										        required
									          />
									        </label>
									         <label class="d-block mb-4">
									          <span class="form-label d-block"><b>Full name</b></span>
									          <input
									            name="name"
									            type="text"
									            class="form-control"
									            placeholder="Enter Your Full Name"
									            required
									          />
									        </label>

									       
	                                        <label class="d-block mb-4">
									          <span class="form-label d-block"><b>Email</b></span>
									          <input
									            name="email"
										        type="email"
										        class="form-control"
										        required
									          />
									        </label>
									        <div id="address" style="display:none;"">
										        <label class="d-block mb-4">
										          <span class="form-label d-block"><b> Full Address </b></span>
										          <input
										            name="address"
										            id="fulladdress"
										            type="text"
										            class="form-control"
										            placeholder=""
										            
										          />
										        </label>

										        <label class="d-block mb-4">
										          <span class="form-label d-block"><b>Zip/Postal code</b></span>
										          <input name="zip" id="zip" type="text" class="form-control" placeholder=""  />
										        </label>
				                      	    </div>
				                       	    <input type="submit" value="Place Order" class="btn btn-success form-control">
					                           <br><br><br>
	                                	</div>	
	                       	       </div>
	                       	    </form>
                       	    </div>
                       	   <div class="col-md-1"></div>
                    </div>
				</div> 				
			</div>
        </div>
        <?php
        $is_login = $this->session->userdata('is_logged_in');
        if ($is_login === true) {
        ?>
        
					<?php
						$totalQuantity = 0;
						$totalPrice = 0;
						$i = 0;
					if (!empty($cart)) {
						$numRows = count($cart);
						foreach ($cart as $row) { 
							$i++;
							$product = $this->db->select('*')->from('product_tbl')->where('id',$row->product_id)->get()->row();
							
							$totalQuantity += $row->cart_qty;
							
							$totalPrice += ($row->cart_qty * $row->product_price);	
					    }
					}
					?>
				
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-light">
            <div class="pt-4">
                   <h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<h6>No. Of Item</h6>
							<h6>Total Price</h6>
							<h6> Total Quantity</h6>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6><?= $numRows ?> items</h6>
							<h6>Rs <?= $totalPrice ?></h6>
							<h6><?= $totalQuantity ?></h6>
							<h6 class="text-success">FREE</h6>
							<hr>
							<h6>Rs <?= $totalPrice ?></h6>
						</div>
						
					</div>
            </div>
        </div>
        <?php
        } else {

							$totalQuantity = 0;
							$totalPrice = 0;
							$price = 0;
							$i = 0;
						 if (!empty($cartItems)) {
								foreach ($cartItems as $item) {
									
									$i++;
									$product = $this->db->select('*')->from('product_tbl')->where('id',$item['id'])->get()->row();

									$totalQuantity += $item['qty'];
											
									$totalPrice += ($item['qty'] * $product->product_sales_price);
                                }
					        }
									?>
									
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-light">
            <div class="pt-4" id="price-detail">
                   <h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
							<h6>No. Of Item</h6>
							<h6>Total Price</h6>
							<h6> Total Quantity</h6>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6><?= $numRows ?> items</h6>
							<h6>Rs <?= $totalPrice ?></h6>
							<h6><?= $totalQuantity ?></h6>
							<h6 class="text-success">FREE</h6>
							<hr>
							<h6>Rs <?= $totalPrice ?></h6>
						</div>
					</div>
            </div>
           
        </div>
        <?php
        }
        ?>
    </div>
</div>
<script>
 
    // Get the input element
const contactInput = document.getElementById('contact-input');

// Add an input event listener to the input element
contactInput.addEventListener('input', function (event) {
    // Remove all non-numeric characters
    const cleanedValue = event.target.value.replace(/[^0-9]/g, '');

    // Ensure the value doesn't exceed 10 characters
    const maxLength = 10;
    const truncatedValue = cleanedValue.slice(0, maxLength);

    // Update the input value
    event.target.value = truncatedValue;
});

    
</script>

<script>
    const takeAwayRadio = document.getElementById("take_away");
    const deliveryRadio = document.getElementById("delivery");

    takeAwayRadio.addEventListener("change", function() {
        if (this.checked) {
            deliveryRadio.checked = false;
        }
    });

    deliveryRadio.addEventListener("change", function() {
        if (this.checked) {
            takeAwayRadio.checked = false;
        }
    });

</script>

<script>
	function check_type(){
	     // alert("hii");
	      var selectedRadio = document.querySelector('input[name="delivery_type"]:checked');
	     if (selectedRadio) {
            var selectedValue = selectedRadio.value;
            //alert(selectedValue);
            if(selectedValue == 'Take away'){
            	$('#address').hide();
                $('#csvtu').show();
                // $("#fulladdress").removeAttr("required");
                // $("#zip").removeAttr("required");
              
            }else{
            	$('#csvtu').hide();
                $('#address').show();
             
            }
        }
	    
	}


</script>