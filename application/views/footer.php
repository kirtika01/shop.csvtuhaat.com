<!-- footer_section - start
		================================================== -->
		<footer class="footer_section supermarket_footer clearfix">
			<div class="footer_widget_area sec_ptb_100 bg_white clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget footer_useful_links clearfix">
								<h3 class="footer_widget_title">Buyer Central</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="<?=base_url()?>login">Sign in</a></li>
									<li><a href="<?=base_url()?>signup">Register</a></li>
									<li><a href="#!">Payment Options</a></li>
									<li><a href="#!">Shipping Policy</a></li>
									<li><a href="#!">Return Policy</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget bestrated_products">
								<h3 class="footer_widget_title">Best Rated Products</h3>
				<?php
					$productlist = $this->db->select('*')
									->from('product_tbl')
									->get()
									->result();
					foreach ($productlist as $key => $row) {
						$category = $this->db->select('*')->from('category_tbl')->where('id',$row->product_category_id)->get()->row();
						$id = $row->id;
						if ($key == 2) {
							break;
						}
					?>
								<div class="supermarket_product_small">
									<span class="item_type"><?= $category->category_name ?></span>
									<h3 class="item_title">
										<a href="<?= base_url() ?>product_detail/<?= $row->id?>"><?= $row->product_name?></a>
									</h3>
									<span class="item_price"><i class="fa fa-inr" aria-hidden="true"></i><?= $row->product_sales_price ?></span>
									<ul class="rating_star ul_li clearfix" hidden="">
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fal fa-star"></i></li>
									</ul>
								</div>
					<?php } ?>

								
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget footer_useful_links clearfix">
								<h3 class="footer_widget_title">Information</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="<?=base_url()?>about_us">About Us</a></li>
									<li><a href="<?=base_url()?>blog">Blog</a></li>
									<li><a href="<?=base_url()?>location">Location</a></li>

							
									<li><a href="https://csvtuforte.com/">CSVTU Forte</a></li>
									<li><a href="<?=base_url()?>contact_us">Contact Us</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget supermarket_footer_contact">
								<h3 class="footer_widget_title">Contact Info</h3>
								<ul class="ul_li_block clearfix">
									<li>
										<div class="item_icon">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="item_content">
											<p class="mb-0"> info@csvtuforte.com</p>
										</div>
									</li>
									<li>
										<div class="item_icon">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="item_content">
											<p class="mb-0">
												UTD Block-II, CSVTU Bhilai Campus, P.O. – Newai, Bhilai, District – Durg, Chhattisgarh, 491107
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer_middle sec_ptb_50 text-white clearfix" data-bg-color="#23292d">
				<div class="container">
					<div class="row align-items-center footer-img justify-content-center">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form_item mb-0 ">
								<a href="<?=base_url()?>index">
									<img src="<?= base_url()?>assets/images/logo/footer-logo.png" >
								</a>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-lg-12">
							<ul class="circle_social_links ul_li_right clearfix">
								<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="footer_bottom text-white clearfix" data-bg-color="#191e22">
				<div class="container">
					<div class="row justify-content-lg-between">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<p class="copyright_text mb-0">Copyright © 2023 CSVTU Forte Haat Website Design & Maintained by | <a href="https://ayodhyawebosoft.com/" class="author_link text-white" target="_blank" >Ayodhya Webosoft</a></p>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="payment_methods float-lg-right float-md-right">
								<img src="<?= base_url()?>assets/images/shop/payment_methods_01.png" alt="image_not_found">
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer_section - end
		================================================== -->


		<!-- fraimwork - jquery include -->
		<script src="<?= base_url()?>assets/js/jquery-3.5.1.min.js"></script>
		<script src="<?= base_url()?>assets/js/popper.min.js"></script>
		<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>

		<!-- mobile menu - jquery include -->
		<script src="<?= base_url()?>assets/js/mCustomScrollbar.js"></script>

		<!-- animation - jquery include -->
		<script src="<?= base_url()?>assets/js/parallaxie.js"></script>
		<script src="<?= base_url()?>assets/js/wow.min.js"></script>

		<!-- nice select - jquery include -->
		<script src="<?= base_url()?>assets/js/nice-select.min.js"></script>

		<!-- carousel - jquery include -->
		<script src="<?= base_url()?>assets/js/slick.min.js"></script>

		<!-- countdown timer - jquery include -->
		<script src="<?= base_url()?>assets/js/countdown.js"></script>

		<!-- popup images & videos - jquery include -->
		<script src="<?= base_url()?>assets/js/magnific-popup.min.js"></script>

		<!-- filtering & masonry layout - jquery include -->
		<script src="<?= base_url()?>assets/js/isotope.pkgd.min.js"></script>
		<script src="<?= base_url()?>assets/js/masonry.pkgd.min.js"></script>
		<script src="<?= base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>

		<!-- jquery ui - jquery include -->
        <script src="<?= base_url()?>assets/js/jquery-ui.js"></script>

		<!-- custom - jquery include -->
		<script src="<?= base_url()?>assets/js/custom.js"></script>


	</body>
</html>