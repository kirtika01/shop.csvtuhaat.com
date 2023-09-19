<?php
// echo 1;
// die;
$is_login = $this->session->userdata('is_logged_in');
														

	$this->load->library('cart');
    $cartItems = $this->cart->contents();
	$numRows = count($cartItems);
    //print_r($cartItems);
    $totalQuantity = 0;

    foreach ($cartItems as $item) {
        $totalQuantity += $item['qty'];
    }
?>


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




<body class="bg-light">


<div class="container-fluid">
    <div class="row px-5">
        <?php
        $is_login = $this->session->userdata('is_logged_in');
        if ($is_login === true) {
        ?>
        <div class="col-md-7">
            <div class="shopping-cart">
               <h2></h2>
					<br><br>
					<?php
						$totalQuantity = 0;
						$totalPrice = 0;
						$i = 0;
					if (!empty($cartItems)) {
						$numRows = count($cartItems);
						foreach ($cartItems as $row) { 
							$i++;
							$product = $this->db->select('*')->from('product_tbl')->where('id',$row['id'])->get()->row();
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
							$totalQuantity += $row['qty'];
							
							$totalPrice += ($row['qty'] * $row['price']);	
					?>
							<form action="" method="post" class="cart-items">
										<div class="border rounded bg-light">
											<div class="container">
												<div class="row justify-content-lg-between" style="margin-top:-20px">
													<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
														<div class="shop_details_image mt_20" style="margin-top:20px;padding: 10px;">
															<div class="tab-content">
																<?php foreach ($imageUrls as $index => $imageUrl) { ?>
																	<div id="tab_<?php echo $index + 1; ?>" class="tab-pane <?php echo $index === 0 ? 'active' : 'fade'; ?>">
																		<img src="<?= base_url()?>admin/<?=$imageUrl?>" alt="image_not_found" style="height: 200px;">
																	</div>
																<?php } ?>
															</div>
															
														</div>
													</div>
													<input type="hidden" id="id<?=$i?>" value="<?= $product->id ?>">
													<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
														<div class="shop_details_content">
															<div>
																<h3 class="" style="padding: 5%;margin-top: 15px;"><?= $product->product_name ?></h3>
																<ul class="btns_group_1 ul_li clearfix" style="padding: 5%;margin-top: -40px;">
																	
																	<li>
																		<div class="quantity_input" style="border-radius: 65px;">
																			<form action="#">
																				<span style="background-color: transparent;" class="input_number_decrement" style="color:black;" onclick="decrement(<?=$i?>)">–</span>
																				<input style="background-color: transparent;" class="input_number" type="number" min="1" id="qty<?=$i?>" value="<?= $row['qty']?>">
																				<span style="background-color: transparent;" class="input_number_increment" style="color:black;" onclick="increment(<?=$i?>)">+</span>
																			</form>
																		</div>
																	</li>
																	
																</ul>
																
																<div class="item_price mb-20" style="padding-left:20px;font-size: 25px;margin-bottom: -20px;">
																		<strong><i class="fa fa-inr" aria-hidden="true"></i><input type="hidden" id="price<?=$i?>" value="<?= $product->product_sales_price ?>"><?= $product->product_sales_price ?></strong>
																		<del style="font-weight:300;"><i class="fa fa-inr" aria-hidden="true" style="font-weight:200;" ></i><?= $product->product_regular_price ?></del>
																	</div>
																<button type="button" class="btn btn-danger mx-2 float-right" onclick="removeCartItem(<?=$i?>)">Remove</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
									</form>
					<?php
						}
					}else{
						echo "<h5>Cart is Empty</h5>";
					}
					?>
                
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-light">
            <div class="pt-4" id="price-details">
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
						 <div class="p-4">
			            	 <a href="<?= base_url()?>checkout" class="btn btn-success" >Check Out</a>
			            </div>
					</div>
            </div>
        </div>
        <?php
        } else {
        ?>
        <div class="col-md-7">
            <div class="shopping-cart">
                        <h2></h2>
							<br><br>
							<?php
							$totalQuantity = 0;
							$totalPrice = 0;
							$price = 0;
							$i = 0;
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
									<form action="" method="post" class="cart-items">
										<div class="border rounded bg-light">
											<div class="container">
												<div class="row justify-content-lg-between" style="margin-top:-20px">
													<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
														<div class="shop_details_image mt_20" style="margin-top:20px;padding: 10px;">
															<div class="tab-content">
																<?php foreach ($imageUrls as $index => $imageUrl) { ?>
																	<div id="tab_<?php echo $index + 1; ?>" class="tab-pane <?php echo $index === 0 ? 'active' : 'fade'; ?>">
																		<img src="<?= base_url()?>admin/<?=$imageUrl?>" alt="image_not_found">
																	</div>
																<?php } ?>
															</div>
															
														</div>
													</div>
													<input type="hidden" id="id<?=$i?>" value="<?=  $item['rowid']  ?>">
													<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
														<div class="shop_details_content">
															<div>
																<h3 class="" style="padding: 5%;margin-top: 15px;"><?= $product->product_name ?></h3>
																<ul class="btns_group_1 ul_li clearfix" style="padding: 5%;margin-top: -40px;">
																	
																	<li>
																		<div class="quantity_input" style="border-radius: 65px;">
																			<form action="#">
																				<span style="background-color: transparent;" class="input_number_decrement" style="color:black;" onclick="decrement(<?=$i?>)">–</span>
																				<input style="background-color: transparent;" class="input_number" type="number" min="1" id="qty<?=$i?>" value="<?= $item['qty'] ?>">
																				<span style="background-color: transparent;" class="input_number_increment" style="color:black;" onclick="increment(<?=$i?>)">+</span>
																			</form>
																		</div>
																	</li>
																	
																</ul>
																
																<div class="item_price mb-20" style="padding-left:20px;font-size: 25px;margin-bottom: -20px;">
																		<strong><i class="fa fa-inr" aria-hidden="true"></i><input type="hidden" id="price<?=$i?>" value="<?= $product->product_sales_price ?>"><?= $product->product_sales_price ?></strong>
																		<del style="font-weight:300;"><i class="fa fa-inr" aria-hidden="true" style="font-weight:200;" ></i><?= $product->product_regular_price ?></del>
																	</div>
																<button type="button" class="btn btn-danger mx-2 float-right" onclick="removeCartItem(<?=$i?>)">Remove</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
									</form>
								<?php
								}
							}else{
									echo "<h5>Cart is Empty</h5>";
							}?>
            </div>
        </div>
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
            <div class="p-4">
               <a href="<?= base_url()?>checkout" class="btn btn-success" >Check Out</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h2 class="form_title text-uppercase text-center float-center">Login</h2></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form id="loginForm" action="<?= base_url() ?>Login/check_login1" method="post">
							<div class="reg_form">
                            	<div class="input-group custom">
									<input type="text" class="form-control form-control-lg" name="phonenumber" placeholder="Phone Number" />
									<div class="input-group-append custom"> <span class="input-group-text"><i class="fa fa-user"></i
											></span> </div>
								</div>
								<br>
								<div class="input-group custom">
									<input type="password" class="form-control form-control-lg" name="password" placeholder="**********" />
									<div class="input-group-append custom"> <span class="input-group-text"><i class="fal fa-unlock-alt"></i
											></span> </div>
								</div>
								<br>
								<!-- <a class="forget_pass text-uppercase mb_30" href="#!">Forgot password?</a> -->
								<center><button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Login</button></center>

								<div class="create_account text-center">
									<h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
									<a class="create_account_btn text-uppercase" href="<?=base_url()?>signup">Sign Up</a>
								</div>
							</div>
							<?php 
								if ($this->session->flashdata('login_failed')) 
								{ ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Login Failed !</strong> Invalid Username or Password.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
							</div>
							<?php }

						?>
						</form>
						
            </div>
        </div>
    </div>
</div>



<script>
    function increment(i) {
        var quantity = parseInt($('#qty'+i).val()); 
        var price =$('#price'+i).val(); 
        var cartId = $('#id'+i).val(); 
       var qty = quantity + 1;
       var totalprice = price * qty;
       // alert(cartId);

      updateCart(cartId, qty);
    }

    function decrement(i) {
        //alert("hii");
        var quantity = parseInt($('#qty'+i).val()); 
        var price = parseFloat($('#price'+i).val()); 
        var qty = quantity - 1;
        var cartId = $('#id'+i).val();

        if (qty >= 1) {
            // Call AJAX function to update the cart in the database
            updateCart(cartId, qty);
        }
    }

    function updateCart(cartId, qty) {
    	
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Base/update_cart", 
            data: {
                cart_id: cartId,
                quantity: qty
            },
            success: function(response) {
				$("#price-detail").load(location.href + " #price-detail");
				$("#price-details").load(location.href + " #price-details");
       		 }
        });
    }


    function removeCartItem(i) {
		var cartId = $('#id'+i).val();
	//	alert("hii");
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Base/remove_cart_item", // Update the URL to the correct controller method
            data: {
                cart_id: cartId
            },
            success: function(response) {
                if (response.status === "success") {
                    console.log(response.message);
                    location.reload(); // Reload the page after successful removal
                } else {
                    console.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", error);
            }
        });
    }
    function login() {
    	//alert('hii');
           $('#loginModal').modal('show');
    }
    
</script>







