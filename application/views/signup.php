

		<!-- main body - start
		================================================== -->
		<main>

			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="<?= base_url()?>assets/images/img1.jpg">
				<div class="overlay" data-bg-color="#1d1d1d"></div>
				<div class="container" style="padding-top: 44px;">
					<h1 class="page_title text-white">Register Page</h1>
					<ul class="breadcrumb_nav ul_li_center clearfix">
						<li><a href="#!">Home</a></li>
						<!-- <li>Pages</li> -->
						<li>Register</li>
					</ul>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- register_section - start
			================================================== -->
			<section class="register_section sec_ptb_140 parallaxie clearfix" data-background="White">
				<div class="container">
					<div class="reg_form_wrap signup_form" data-background="assets/images/ll.jpg">
						<form action="<?= base_url()?>Base/insert_signup" method="post" >
							<div class="reg_form">
								<h2 class="form_title text-uppercase" style="margin-left: 72px;">Register</h2>
								<div class="form_item">
									<input type="text" name="name" placeholder=" Name" required>
								</div>
								<div class="form_item">
									<input type="date" name="birthdate" id="birthdate" placeholder="Enter Date of Birthdate" required>
								</div>
								<div class="form_item">
									<input type="text" name="address" placeholder="Address" required>
								</div>
								<div class="form_item">
									<input type="email" name="email" placeholder="Email" required>
								</div>
								<div class="form_item">
									<input type="tel" name="phone" placeholder="phone" required>
								</div>
								<div class="form_item">
									<input type="password" name="password" placeholder="password" required>
								</div>
								<!-- <div class="form_item">
									<input type="radio" name="gender"
									id="check-male" >
								</div>
								<div class="form_item">
									<input type="password" name="password" placeholder="Confirm Password"> -->
								</div>
								<div class="checkbox_item mb_30">
									<label for="agree_checkbox"><input id="agree_checkbox" type="checkbox" required> I agree to the Terms of User</label>
								</div>
								<button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Create Account</button>

								

								

								
								
								
								

								<div class="create_account text-center">
									<h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
									<a class="create_account_btn text-uppercase" href="<?=base_url()?>login">Login</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			<!-- register_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		

