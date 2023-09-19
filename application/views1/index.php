

			<!-- slider_section - start
			================================================== -->
			<section class="slider_section supermarket_slider sec_ptb_50 clearfix" data-background="<?= base_url()?>assets/images/backgrounds/bg_13.jpg">
				<div class="container maxw_1460">
					<div class="row justify-content-lg-between">
						<div class="col-lg-3">
							<div class="alldepartments_menu_wrap">
								<div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
									<div class="card">
									  <ul class="alldepartments_menulist ul_li_block clearfix">
											<?php 
												$category = $this->db->select('*')->from('category_tbl')->where('status',1)->get()->result();
												if (!empty($category)) {
													foreach ($category as $row) {
													
											?>
											<li>
													<a href="<?= base_url()?>category_products/<?=$row->id?>">
														<span class="icon" >
														 &nbsp;
														</span>
														<?= $row->category_name ?>
													</a>
												</li>
											<?php } } ?>
											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-7 banner-section">
							<div class="main_slider clearfix" data-slick='{"arrows": false}'>
								<div class="item clearfix" data-bg-color="#ffc156">
									<div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
										<img src="<?= base_url()?>assets/images/banner/img1.png" alt="image_not_found" width="100%">
									</div>
									<div class="slider_content">
										<h3 data-animation="fadeInUp" data-delay=".6s">CSVTU FORTE HAAT</h3>
										<h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
										<!-- <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
											<small>From</small>
											<sup><i class="fa fa-inr" aria-hidden="true"></i></sup>749<sup>99</sup>
										</div> -->
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
											<a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
										</div>
									</div>
								</div>

								<div class="item clearfix" data-bg-color="#ffc156">
									<div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
										<img src="<?= base_url()?>assets/images/banner/img2.png" alt="image_not_found" width="100%">
									</div>
									<div class="slider_content">
										<h3 data-animation="fadeInUp" data-delay=".6s">CSVTU FORTE HAAT</h3>
										<h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
										<!-- <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
											<small>From</small>
											<sup><i class="fa fa-inr" aria-hidden="true"></i></sup>749<sup>99</sup>
										</div> -->
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
											<a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
										</div>
									</div>
								</div>

								<div class="item clearfix" data-bg-color="#ffc156">
									<div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
										<img src="<?= base_url()?>assets/images/banner/img1.png" alt="image_not_found" width="100%">
									</div>
									<div class="slider_content">
										<h3 data-animation="fadeInUp" data-delay=".6s">CSVTU FORTE HAAT</h3>
										<h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
										<!-- <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
											<small>From</small>
											<sup><i class="fa fa-inr" aria-hidden="true"></i></sup>749<sup>99</sup>
										</div> -->
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
											<a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
										</div>
									</div>
								</div>
								<div class="item clearfix" data-bg-color="#ffc156">
									<div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
										<img src="<?= base_url()?>assets/images/banner/img2.png" alt="image_not_found" width="100%">
									</div>
									<div class="slider_content">
										<h3 data-animation="fadeInUp" data-delay=".6s">CSVTU FORTE HAAT</h3>
										<h4 data-animation="fadeInUp" data-delay=".4s">sell to get what you love</h4>
										<!-- <div class="item_price" data-animation="fadeInUp" data-delay=".8s">
											<small>From</small>
											<sup><i class="fa fa-inr" aria-hidden="true"></i></sup>749<sup>99</sup>
										</div> -->
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
											<a href="#!" class="custom_btn btn_round bg_supermarket_red">Start Buying</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-2">
							<div class="sm_offer_item offer_fullimage text-white mb_30">
								<img src="<?= base_url()?>assets/images/offer/supermarket/img_01.jpg" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										 Groceries
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="sm_offer_item offer_fullimage text-white mb_30">
								<img src="<?= base_url()?>assets/images/offer/supermarket/img_03.jpg" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Art & Craft of CG
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/offer/supermarket/img_02.jpg" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										CG Cuisine's
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- slider_section - end
			================================================== -->


			<!-- policy_section - start
			================================================== -->
			<section class="policy_section sec_ptb_50 pb-0 clearfix mhide">
				<div class="container maxw_1460">
					<div class="supermarket_policy clearfix">
						<ul class="ul_li clearfix">
							<li>
								<div class="supermarket_policy_item clearfix">
									<div class="item_icon">
										<img src="<?= base_url()?>assets/images/icons/supermarket/icon_12.png" alt="icon_not_found">
									</div>
									<div class="item_content">
										<h3 class="text-uppercase">Free Delivery</h3>
										<p>For all order over <i class="fa fa-inr" aria-hidden="true"></i>120</p>
									</div>
								</div>
							</li>

							<li>
								<div class="supermarket_policy_item clearfix">
									<div class="item_icon">
										<img src="<?= base_url()?>assets/images/icons/supermarket/icon_13.png" alt="icon_not_found">
									</div>
									<div class="item_content">
										<h3 class="text-uppercase">Safe payment</h3>
										<p>100% secure payment</p>
									</div>
								</div>
							</li>

							<li>
								<div class="supermarket_policy_item clearfix">
									<div class="item_icon">
										<img src="<?= base_url()?>assets/images/icons/supermarket/icon_14.png" alt="icon_not_found">
									</div>
									<div class="item_content">
										<h3 class="text-uppercase">Shop with confidence</h3>
										<p>If goods have problems</p>
									</div>
								</div>
							</li>

							<li>
								<div class="supermarket_policy_item clearfix">
									<div class="item_icon">
										<img src="<?= base_url()?>assets/images/icons/supermarket/icon_15.png" alt="icon_not_found">
									</div>
									<div class="item_content">
										<h3 class="text-uppercase">24/7 help center</h3>
										<p>Dedicated 24/7 support</p>
									</div>
								</div>
							</li>

							<li>
								<div class="supermarket_policy_item clearfix">
									<div class="item_icon">
										<img src="<?= base_url()?>assets/images/icons/supermarket/icon_16.png" alt="icon_not_found">
									</div>
									<div class="item_content">
										<h3 class="text-uppercase">Friendly services</h3>
										<p>30 day satisfaction guarantee</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- policy_section - end
			================================================== -->


			<!-- deals_section - start
			================================================== -->
			<section class="deals_section sec_ptb_50 clearfix">
				<div class="container maxw_1460">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="supermarket_section_title clearfix">
								
								<h2 class="title_text mb-0">Flash Deal</h2>
							</div>
						</div>

						<div class="col-lg-7">
							<div class="gray_line"></div>
						</div>

						<div class="col-lg-2">
							<div class="carousel_nav align_right">
								<button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
								<button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
							</div>
						</div>
					</div>
					<div class="supermarket_deals_carousel position-relative clearfix">
						<div class="slideshow5_slider row clearfix" data-slick='{"dots": false}'>
									
							<?php 
								$category = $this->db->select('*')->from('category_tbl')->where('status',1)->get()->result();
								if (!empty($category)) {
									foreach ($category as $row) {
									
							?>
							<div class="item col">
								<div class="supermarket_deals_item text-center clearfix">
									<div class="offer_text">Flat -30%</div>
									<a href="<?= base_url()?>category_products/<?=$row->id?>" class="item_image">
										<img src="<?= base_url()?>admin/assets/uploads/<?= $row->category_image ?>" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">
											<a href="<?= base_url()?>category_products/<?=$row->id?>"><?= $row->category_name ?></a>
										</h3>
									</div>
									<!-- <span class="item_instock">Products</span> -->
								</div>
							</div>
                         <?php } } ?>							
						</div>
					</div>

				</div>
			</section>
			<!-- deals_section - end
			================================================== -->


			<!-- product_section - start
			================================================== -->
			<section class="product_section sec_ptb_100 bg_white clearfix">
				<div class="container maxw_1460">
					<div class="row justify-content-lg-between">
						<div class="col-lg-3">
							<div class="supermarket_advertisement_3 delivery dhide pb-20">
								<img src="<?= base_url()?>assets/images/shop/delivery.png" alt="image_not_found">
								<!-- <img src="<?= base_url()?>assets/images/offer/supermarket/img_05.jpg" alt="image_not_found"> -->
								<div class="item_content text-white">
									<h3 class="item_title text-white">
										Door Step Delivery
									</h3>
									<span class="item_price"><sup><i class="fa fa-inr" aria-hidden="true"></i></sup>1,200</span>
									<a class="custom_btn bg_black btn_round" href="#!">Shop Now</a>
								</div>
							</div>
							<div class="supermarket_sidebar_tab mb_30">
								<div class="wrap_heade bg_supermarket_red clearfix">
									<span>Top Flash Deals in</span>
									<h2 class="pt-10">All Category</h2>
								</div>
								<ul class="ul_li_block nav" role="tablist">
									<?php 
											$category = $this->db->select('*')->from('category_tbl')->where('status',1)->get()->result();
											if (!empty($category)) {
												foreach ($category as $row) {
												
										?>
										<li><a class="active" data-toggle="tab" href="#tab1"><?= $row->category_name ?></a></li>
									<?php } } ?>
									
								</ul>
							</div>

							<div class="supermarket_advertisement_3 delivery mhide">
								<img src="<?= base_url()?>assets/images/shop/delivery.png" alt="image_not_found">
								<!-- <img src="<?= base_url()?>assets/images/offer/supermarket/img_05.jpg" alt="image_not_found"> -->
								<div class="item_content text-white">
									<h3 class="item_title text-white">
										Door Step Delivery
									</h3>
									<span class="item_price"><sup><i class="fa fa-inr" aria-hidden="true"></i></sup>1,200</span>
									<a class="custom_btn bg_black btn_round" href="#!">Shop Now</a>
								</div>
							</div>
						</div>

						<div class="col-lg-9">
							<div class="tab-content">
								<div id="tab1" class="tab-pane active">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<?php
										//print_r($product);die;
							              if (!empty($product)) {
                                                $i = 0;
                                                foreach ($product as $row) {
                                                  $i++;
                                                  
                                                    $category = $this->db->select('*')->from('category_tbl')->where('id',$row->product_category_id)->get()->row();

													$id = $row->id;

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


													$cartItemExists = false;
													$this->load->library('cart');
                                           			$cartItems = $this->cart->contents();
													foreach ($cartItems as $cartItem) {
														if ($cartItem['id'] == $row->id) {
															$cartItemExists = true;
															break;
														}
													}
                                        ?>
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<?php

													$givenDate = $row->date;
													//print_r($givenDate);die;
													// Calculate the date 7 days ahead of the given date
													$newDate = date('Y-m-d', strtotime($givenDate . ' + 7 days'));
													//print_r($newDate);die;
													$today = date('Y-m-d');
													
													 if($row->product_stock_status == 1){ ?>
														<li data-bg-color="#8d8d8d">SOLD OUT</li>
													<?php } else if($newDate >= $today){
														
														$regularPrice = $row->product_regular_price;
														$salesPrice = $row->product_sales_price;
													
														// Calculate the discount percentage
														$discountPercentage = (($regularPrice - $salesPrice) / $regularPrice) * 100;
														$formattedDiscountPercentage = number_format($discountPercentage, 2);
													    //print_r($formattedDiscountPercentage);die;
													?>
														<li data-bg-color="#cc1414"><?= $formattedDiscountPercentage?> %</li>
														<li data-bg-color="#187943">NEW</li>
													<?php } else {
														$regularPrice = $row->product_regular_price;
														$salesPrice = $row->product_sales_price;
													
														// Calculate the discount percentage
														$discountPercentage = (($regularPrice - $salesPrice) / $regularPrice) * 100;
														$formattedDiscountPercentage = number_format($discountPercentage, 2);
													     ?>
														<li data-bg-color="#cc1414"><?= $formattedDiscountPercentage?> %</li>
													<?php } ?>
												</ul>
												<a class="item_image mb-0" href="<?= base_url()?>product_detail/<?=$row->id?>">
												<?php if (!empty($imageUrls[0])) { ?>
												<img src="<?= base_url()?>admin/<?=$imageUrls[0]?>" alt="image_not_found" width="100%" style="margin-top:-30px;">
												<?php } else { ?>
													<img src="" alt="default_image">
												<?php } ?>
												</a>

												<div class="item_content">
													<span class="item_type text-uppercase"><?= $category->category_name ?></span>
													<h3 class="item_title">
														<a href="#!">
															<?= $row->product_name ?> 
														</a>
													</h3>
													
													<div class="item_price">
														<strong><i class="fa fa-inr" aria-hidden="true"></i><?= $row->product_sales_price ?></strong>
														<del><i class="fa fa-inr" aria-hidden="true"></i><?= $row->product_regular_price ?></del>
													</div>

													<input type="hidden" value="<?= $row->id ?>" id="product_id<?= $i ?>">
													<?php
														$is_login = $this->session->userdata('is_logged_in');

														if ($is_login === true) {
															$cartItemExists = false;
															$user = $this->session->userdata('user_detail');
															
															// Fetch the user's cart items
															$cartItems = $this->db->select('*')
																				->from('cart_tbl')
																				->where('user_id', $user->id)
																				->get()
																				->result();

															foreach ($cartItems as $cartItem) {
																if ($cartItem->product_id == $row->id) {
																	$cartItemExists = true;
																	break;
																}
															}
														} else {
															$add = "block";
															$goto = "none";
														}
													?>
													<div id="add<?= $i ?>" style="display: <?= !$cartItemExists ? 'block' : 'none'; ?>;">
													    <input class="add-crt-input-prod btncus text-center" style="width:50px;" type="number" value="1" name="quantity<?= $i ?>" id="quantity<?= $i ?>">
													    <button class="add-to-cart-btn btn btn-success" style="margin-left:10px;" onclick="add(<?= $i ?>)">Add to Cart</button>
													</div>
													<div id="goto-cart<?= $i ?>" style="display: <?= $cartItemExists ? 'block' : 'none'; ?>;">
    												   <a href="<?= base_url() ?>cart" class="btn btn-success go-to-cart-btn" >Go to Cart</a>
													</div>
													
												</div>
											</div>
										</li>
                                    <?php }
									}?>
								    </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- product_section - end
			================================================== -->
							<!-- deals_section - start
			================================================== -->
			<?php
        if (!empty($product)) {
            // Initialize an empty array to store categorized products
            $categorizedProducts = array();
			
			
            // Categorize products based on their categories
            foreach ($product as $row) {
                $category_id = $row->product_category_id;

                // Create a new array for the category if it doesn't exist
                if (!isset($categorizedProducts[$category_id])) {
                    $categorizedProducts[$category_id] = array();
                }

                // Add the product to the respective category's array
                $categorizedProducts[$category_id][] = $row;
            }
			foreach ($categorizedProducts as $category_id => $categoryProducts) {
				$category = $this->db->select('*')->from('category_tbl')->where('id', $category_id)->get()->row();
				
        ?>

			<section class="deals_section sec_ptb_50 clearfix">
				<div class="container maxw_1460">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="supermarket_section_title clearfix">
								<h2 class="title_text mb-0"><?= $category->category_name; ?></h2>
							</div>
						</div>

						<div class="col-lg-7">
							<div class="gray_line"></div>
						</div>

						<div class="col-lg-2">
							<div class="carousel_nav align_right">
									<button type="button" class="left_arrow"><i class="fal fa-arrow-left"></i></button>
									<button type="button" class="right_arrow"><i class="fal fa-arrow-right"></i></button>
							</div>
						</div>
					</div>

					<div class="supermarket_deals_carousel position-relative clearfix">
						<div class="slideshow5_slider row clearfix" data-slick='{"dots": false}'>
							<?php foreach ($categoryProducts as $product) { 
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
								?>
							<div class="item col">
								<div class="supermarket_deals_item text-center clearfix">
									<div class="offer_text"></div>
									<a href="<?= base_url()?>product_detail/<?=$product->id?>" class="item_image">
										<img src="<?= base_url()?>admin/<?=$imageUrls[0]?>" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">
											<a href="#!"><?= $product->product_name; ?></a>
										</h3>
									</div>
									<span class="item_instock"><?= $category->category_name; ?></span>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>

		<?php }} ?>

			<!-- advertisement_section - start
			================================================== -->
			<section class="advertisement_section sec_ptb_50 pb-0 clearfix">
				<div class="container maxw_1460">
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/shop/11.png" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Category 1
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/shop/02.png" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Category 2
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/shop/11.png" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Category 3
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- advertisement_section - end
			================================================== -->


			<!-- bestseller_section - start
			================================================== -->
			<section class="bestseller_section sec_ptb_50 pb-0 clearfix">
				<div class="container maxw_1460">

					<div class="row mb_50 align-items-center justify-content-lg-between">
						<div class="col-lg-5_k">
							<div class="supermarket_section_title clearfix">
								<span class="sub_title text-uppercase">A wide selection of items</span>
								<h2 class="title_text mb-0">Bestseller Products</h2>
							</div>
						</div>

						<div class="col-lg-7">
							<ul class="supermarket_tab_nav ul_li_right nav clearfix" role="tablist">
								<li>
									<a class="active" data-toggle="tab" href="#tab3">Category 1</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab4">Category 2</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab3">Category 3</a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab4">Category 4</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="tab-content">
						<div id="tab3" class="tab-pane active">
							<ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="item_image">
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/66.png" alt="image_not_found">
											</div>
											<ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/8/24"></ul>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="info_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="info_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="item_image">
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/66.png" alt="image_not_found">
											</div>
											<ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/8/24"></ul>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>

						<div id="tab4" class="tab-pane fade">
							<ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="item_image">
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/66.png" alt="image_not_found">
											</div>
											<ul class="countdown_timer content_inbox ul_li_center clearfix" data-countdown="2021/8/24"></ul>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="info_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="info_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/33.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/44.png" alt="image_not_found">
											</div>
											<div class="item">
												<img src="<?= base_url()?>assets/images/shop/55.png" alt="image_not_found">
											</div>
										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#187943">Watch</span>
											<div class="rating_star_wrap d-flex align-items-center clearfix">
												<ul class="rating_star ul_li mr-2 clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
												<span class="rating_value">4.0</span>
											</div>
											<h3 class="item_title">
												<a href="#!">Pitwa art</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="#!">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</section>
			<!-- bestseller_section - end
			================================================== -->


			<!-- advertisement_section - start
			================================================== -->
			<section class="advertisement_section sec_ptb_50 clearfix">
				<div class="container maxw_1460">
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/shop/02.png" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Category
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/shop/11.png" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Category
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="sm_offer_item offer_fullimage text-white">
								<img src="<?= base_url()?>assets/images/shop/02.png" alt="image_not_found">
								<div class="item_content">
									<h3 class="item_title text-white">
										Category
									</h3>
									<span class="item_price">Price: <i class="fa fa-inr" aria-hidden="true"></i>00.00</span>
									<a class="text_btn" href="#!">
										<span>Order Now</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- advertisement_section - end
			================================================== -->


			<!-- supermarket_feature_carousel - start
			================================================== -->
			<section class="supermarket_feature_carousel arrow_ycenter clearfix" data-slick='{"dots": false}'>
				<div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
					<div class="container maxw_1460">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-7 order-last">
								<div class="item_image">
									<img src="<?= base_url()?>assets/images/banner/img1.png" alt="image_not_found" width="100%">
								</div>
							</div>

							<div class="col-lg-5_cs">
								<div class="item_content">
									
									<h1 class="item_title text-white mb_30">
										CSVTU FORTE HAAT 
									</h1>
									<a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
					<div class="container maxw_1460">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-7 order-last">
								<div class="item_image">
									<img src="<?= base_url()?>assets/images/banner/img02.png" alt="image_not_found" width="100%">
								</div>
							</div>

							<div class="col-lg-5_cs">
								<div class="item_content">
									
									<h1 class="item_title text-white mb_30">
										CSVTU FORTE HAAT 
									</h1>
									<a class="custom_btn btn_round bg_electronic_blue" href="#!">Start Buying</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</section>
			<!-- supermarket_feature_carousel - end
			================================================== -->


			


		</main>
		<!-- main body - end
		================================================== -->

<link rel="stylesheet" type="text/css" href="path-to-slick/slick.css">
<link rel="stylesheet" type="text/css" href="path-to-slick/slick-theme.css">
<script src="path-to-slick/slick.min.js"></script>


<script>
$(document).ready(function() {
    // Initialize the Slick carousel
    $('.slideshow5_slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 3, // Adjust the number of slides shown
        slidesToScroll: 1,
        autoplay: true, // Enable auto-sliding
        autoplaySpeed: 3000, // Set the autoplay interval in milliseconds
        prevArrow: $('.left_arrow'), // Use the left arrow button as the previous button
        nextArrow: $('.right_arrow')
    });
});
</script>
<script>
	
function add(id){
	//alert("hii");
	// $("#add"+id).hide();
    // $("#goto-cart"+id).show();

	var quantity = $('#quantity'+id).val();
    var product_id = $('#product_id'+id).val();
    //alert(product_id);
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>Base/add_to_cart',
            data: { product_id: product_id, quantity: quantity },
            success: function(response) {
                var result = JSON.parse(response);
				if (result.status === 'success') {
					$('#add' + id).hide();
					$('#goto-cart' + id).show();
				// 	location.reload();
                }
            }
        });
}

</script>









		