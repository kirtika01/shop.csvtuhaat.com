


	<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="img1.jpg">
				<div class="overlay" data-bg-color="#1d1d1d"></div>
				<div class="container" style="padding-top: 44px;">
					<h1 class="page_title text-white">Login</h1>
					<ul class="breadcrumb_nav ul_li_center clearfix">
						<li><a href="<?=base_url()?>index">Home</a></li>
						<!-- <li>Pages</li> -->
						<li>Login</li>
					</ul>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


	

		<!-- main body - start
		================================================== -->
		<main>


			<!-- register_section - start
			================================================== -->
			<section class="register_section sec_ptb_140 has_overlay parallaxie clearfix" data-background="<?= base_url()?>assets/images/11.jpg">
				<div class="overlay" data-bg-color="#fff"></div>
				<div class="container">
					<div class="reg_form_wrap login_form" data-background="<?= base_url()?>assets/images/55.png">
						<form action="<?= base_url() ?>Login/check_login" method="post">
							<div class="reg_form">
								<h2 class="form_title text-uppercase text-center">Login</h2>
								<div class="form_item">
									<input id="phonenumber" type="text" name="phonenumber" placeholder="phonenumber">
									<label for="username_input"><i class="fal fa-user"></i></label>
								</div>
								<div class="form_item">
									<input id="password_input" type="password" name="password" placeholder="password">
									<label for="password_input"><i class="fal fa-unlock-alt"></i></label>
								</div>
								<a class="forget_pass text-uppercase mb_30" href="#!">Forgot password?</a>
								<button type="submit" class="custom_btn bg_default_red text-uppercase mb_50">Login</button>

								<!-- <div class="social_wrap mb_100">
									<h4 class="small_title_text mb_15 text-center text-uppercase">Or Login With</h4>
									<ul class="circle_social_links ul_li_center clearfix">
										<li><a data-bg-color="#3b5998" href="#!"><i class="fab fa-facebook-f"></i></a></li>
										<li><a data-bg-color="#1da1f2" href="#!"><i class="fab fa-twitter"></i></a></li>
										<li><a data-bg-color="#ea4335" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div> -->

								<div class="create_account text-center">
									<h4 class="small_title_text text-center text-uppercase">Have not account yet?</h4>
									<a class="create_account_btn text-uppercase" href="<?=base_url()?>signup">Sign Up</a>
								</div>
							</div>
						</form>
						<?php 
								if ($this->session->flashdata('login_failed')) 
								{ ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Login Failed !</strong> Invalid Username or Password.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
							</div>
							<?php }

						?>
					</div>
				</div>
			</section>
			<!-- register_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->

