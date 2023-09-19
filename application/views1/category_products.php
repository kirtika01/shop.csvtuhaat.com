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
													    //print_r($formattedDiscountPercentage);die;
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
					// location.reload();
                }
            }
        });
}

</script>