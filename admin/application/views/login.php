<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Login-CSVTU Forte Haat</title>
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/img/logo/fav.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/img/logo/fav.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/img/logo/fav.png" />
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/style.css" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
	<style>
	/*img {
			  opacity: 0.5;
			}*/
	</style>
	<!-- Google Tag Manager -->
	<!-- End Google Tag Manager -->
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo"> <a href="#">
						<img src="<?=base_url()?>assets/img/logo/logo.png" alt="Csvtu Haat" / style="width: 120px;">
					</a> </div>
			<div class="login-menu">
				<h4>CSVTU FORTE HAAT</h4> </div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-4"> </div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Admin Login</h2> </div>
						<form action="<?= base_url() ?>Login/check_login" method="post">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="username" placeholder="Username" />
								<div class="input-group-append custom"> <span class="input-group-text"><i class="icon-copy dw dw-user1"></i
										></span> </div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********" />
								<div class="input-group-append custom"> <span class="input-group-text"><i class="dw dw-padlock1"></i
										></span> </div>
							</div>
							<!-- <div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="forgot-password.html">Forgot Password</a>
										</div>
									</div>
								</div> -->
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</a>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373"> </div>
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
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?=base_url()?>assets/vendors/scripts/core.js"></script>
	<script src="<?=base_url()?>assets/vendors/scripts/script.min.js"></script>
	<script src="<?=base_url()?>assets/vendors/scripts/process.js"></script>
	<script src="<?=base_url()?>assets/vendors/scripts/layout-settings.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>