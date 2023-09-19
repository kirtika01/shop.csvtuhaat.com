
	
		<!-- main body - start
		================================================== -->
		<main>

			<!-- details_section - start
			================================================== -->
			<section class="details_section shop_details sec_ptb_140 pb-0 clearfix">
				
					<?php //print_r($product);die;

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
							<div class="container">
								<div class="row mb_100 justify-content-lg-between">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="shop_details_image">
											<div class="tab-content">
												<?php foreach ($imageUrls as $index => $imageUrl) { ?>
													<div id="tab_<?php echo $index + 1; ?>" class="tab-pane <?php echo $index === 0 ? 'active' : 'fade'; ?>">
														<img src="<?= base_url()?>admin/<?=$imageUrl?>" alt="image_not_found">
													</div>
												<?php } ?>
										</div>
										<ul class="nav ul_li clearfix" role="tablist">
											<?php foreach ($imageUrls as $index => $imageUrl) { ?>
												<li>
													<a class="<?php echo $index === 0 ? 'active' : ''; ?>" data-toggle="tab" href="#tab_<?php echo $index + 1; ?>">
														<img src="<?= base_url()?>admin/<?=$imageUrl?>" alt="image_not_found">
													</a>
												</li>
											<?php } ?>
										</ul>
							      </div>
						       </div>


								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="shop_details_content">
									
										<div>
											<h2 class="item_title mb-2" style="padding: 5%;"><?= $product->product_name ?></h2>
										<ul class="btns_group_1 ul_li mb_30 clearfix" style="padding: 5%;">
											<li>
												<div class="quantity_input">
													<form action="#">
														<span class="input_number_decrement">–</span>
														<input class="input_number" type="text" value="1">
														<span class="input_number_increment">+</span>
													</form>
												</div>
											</li>
											<li>
												<a class="custom_btn bg_black text-uppercase" href="#!"><i class="fal fa-shopping-bag mr-2"></i> Add To Cart</a>
											</li>
										</ul>
										<h4 class="" style="margin-left: 5%;">Description</h4>
										<p class="mb-0" style="margin-left: 5%;" >
											<?= $product->product_description?>
										</p>	
									</div>
									<div class="rating_review_wrap d-flex align-items-center mb_15 clearfix" style="padding: 10%;">
										<ul class="rating_star ul_li">
											<?php
												$review = $this->db->select('*')->from('review_tbl')->where('review_product_id',$product->id)->order_by('id', 'DESC')->get()->result();
												$totalRatings = count($review); // Total number of reviews
												$totalRatingValue = 0; // Sum of all ratings
												if (!empty($review)) {
													foreach ($review as $row) {
														$rating = $row->review_rating_star;
														$totalRatingValue += $rating;
													}
												
													if ($totalRatings > 0) {
														$averageRating = $totalRatingValue / $totalRatings; // Calculate average rating
												
														// Display average rating as stars with color
														echo '<div class="average-rating">';
														for ($i = 1; $i <= 5; $i++) {
															if ($i <= $averageRating) {
																echo '<i class="fas fa-star filled"></i>';
															} else {
																echo '<i class="far fa-star"></i>';
															}
														}
														echo '</div>';
													}
												}
											?>
										</ul>
										<span><?= $totalRatings?> Review(s)</span>
										<button type="button" class="add_review_btn">Add Your Review</button>
									</div>
							
									
								</div>
					      </div>

					<div class="details_description_tab" style="margin-top: 10%;" >
						<ul class="nav  text-uppercase" role="tablist" >
							<li >
								<a class="active" data-toggle="tab" href="#description_tab" ;>Client reviews</a>
							</li>
							<li>
								<a data-toggle="tab" href="#reviews_tab"> Write A Review</a>
							</li>
							
						</ul>

						<!-- Tab panes -->
						<div class="tab-content " >
							<div id="description_tab" class="tab-pane active">
								<div class="wrapper">
									<?php
									$review = $this->db->select('*')->from('review_tbl')->where('review_product_id',$product->id)->order_by('id', 'DESC')->get()->result();
									if (!empty($review)) {
										foreach ($review as $row) {
											$rating = $row->review_rating_star; // Get the review rating from the database
											$filledStars = min($rating, 5); // Calculate the number of filled stars (up to 5)
											$emptyStars = 5 - $filledStars; // Calculate the number of empty stars

											?>
											<div class="box" style="padding: 2%;">
											<i class="fas fa-quote-left quote"></i>
											<p><?= $row->review_message ?></p>
											<div class="content">
												<div class="info">
												<div class="name"><?= $row->review_username?></div>
												<!-- <div class="job">Designer | Developer</div> -->
												<div class="stars review">
												<?php for ($i = 0; $i < $filledStars; $i++) { ?>
														<i class="fas fa-star"></i>
												<?php }

													// Display the empty stars
													for ($i = 0; $i < $emptyStars; $i++) {
														echo '<i class="far fa-star"></i>';
													}?>
												</div>
												</div>
											</div>
											</div>
							          <?php }
									}
									
									?>
                                   
                                  </div>
                                
							</div>

							<div id="reviews_tab" class="tab-pane fade">
							   <form action="<?= base_url('Base/insertReview/'.$product->id) ?>"  onsubmit="return validateRating()" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="text" name="name" placeholder="Your Name" required>
												<input type="hidden" name="product_id" value="<?=$product->id?>">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
											<div class="form_item">
												<input type="email" name="email" placeholder="Your Email" required>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item">
												<input type="text" name="subject" placeholder="Subject" required>
											</div>
										</div>
									</div>
									
									<div class="form_item">
										<textarea name="message" placeholder="Your Message" required></textarea>
									</div>
									<div class="form_item">
										<label for="rating">Rate Us:</label>
										<div class="stars">
											<span class="star" data-value="1">&#9733;</span>
											<span class="star" data-value="2">&#9733;</span>
											<span class="star" data-value="3">&#9733;</span>
											<span class="star" data-value="4">&#9733;</span>
											<span class="star" data-value="5">&#9733;</span>
										</div>
										<input type="hidden" name="rating" id="rating" value="0" required><!-- Hidden input for selected rating -->
									</div>
									<button type="submit" id="submitBtn" class="custom_btn bg_default_red text-uppercase">Submit Review</button>
								</form>
							</div>

							<div id="information_tab" class="tab-pane fade">
								<h4 class="list_title">Pretium turpis et arcu</h4>
								<p class="mb-0">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..
								</p>
							</div>

							
						</div>
					</div>
				</div>
			</section>
			<!-- details_section - end
			================================================== -->




            <div class="related_post_carousel position-relative mb_100" style="margin-left: 13% ;margin-right: 13%;">
                <h3 class="title_text text-uppercase mb_30">YOU MAY ALSO LIKE</h3>
                <div class="slideshow3_slider" data-slick='{"dots": false}'>
				<?php
					$productlist = $this->db->select('*')
									->from('product_tbl')
									->where('product_category_id', $product->product_category_id)
									->where('id !=', $product->id)
									->get()
									->result();
					foreach ($productlist as $row) {
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
					?>
           			<div class="item" >
                        <div class="blog_grid">
                            <a class="blog_image" href="<?= base_url()?>product_detail/<?=$row->id?>">
                                <img src="<?= base_url()?>admin/<?=$imageUrls[0]?>" alt="image_not_found" style="width: ;">
                            </a>
                            <div class="blog_content">
                                
                                <h3 class="blog_title">
                                    <a href="<?= base_url()?>product_detail/<?=$row->id?>"><?= $row->product_name?></a>
                                </h3>
                                <p class="mb_15">
								   <?= $row->product_description?>
                                </p>
                                <a class="text_btn" href="<?= base_url()?>product_detail/<?=$row->id?>"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
					<?php }
					?>
                </div>
                <div class="carousel_nav">
                    <button type="button" class="ss3_left_arrow"><i class="fal fa-angle-left"></i></button>
                    <button type="button" class="ss3_right_arrow"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>

		
	<script>
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating');

        stars.forEach(star => {
			//alert("hii");
            star.addEventListener('click', () => {
                const value = parseInt(star.getAttribute('data-value'));
                ratingInput.value = value;

                // Reset all stars to gray
                stars.forEach(s => s.classList.remove('yellow'));

                // Highlight stars up to the selected one
                for (let i = 0; i < value; i++) {
                    stars[i].classList.add('yellow');
                }
            });
        });

		// let selectedRating = 0;

		// function setRating(rating) {
		// 	selectedRating = rating;
		// 	document.getElementById('rating').value = rating;
		// }

		// function validateRating() {
		// 	alert(selectedRating);
		// 	if (selectedRating === 0) {
		// 		alert("Please Rate Us.");
		// 		return false;
		// 	}else{
		// 		return true; // Allow form submission if a rating is selected.
		// 	}
			
		// }

    </script>