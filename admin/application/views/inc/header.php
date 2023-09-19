<?php
 $user=$this->session->userdata('user_id');
 $userdetail = $this->db->select('*')->from('admin')->where('userid',$user)->get()->row();
//   print_r($user->username) ;
//  die;
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>Csvtu Forte Haat | Admin Panel</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/src/styles/gaurav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/vendors/images/forteHaat.jpg" />
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/vendors/images/forteHaat.jpg" />
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/vendors/images/forteHaat.jpg" />
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/style.css" />
	<!-- product details -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/src/plugins/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/src/styles/saurabh.css">
	<!-- Add product  css -->
	<!--client detail-->
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
	<!--profile css-->
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css" />

	<!-- 
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jvectormap/jquery-jvectormap-2.0.3.css"
		/> -->
	<!-- <link
			rel="stylesheet"
			type="text/css"
			href="<?=base_url()?>assets/vendors/styles/icon-font.min.css"
		/> -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
	<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag("js", new Date());
	gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			"gtm.start": new Date().getTime(),
			event: "gtm.js"
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != "dataLayer" ? "&l=" + l : "";
		j.async = true;
		j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	
	<div class="header">
		<div class="header-left">
			<div class="menu-icon bi bi-list"></div>
			<div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
		</div>
		<div class="header-right">
			
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"> <span class="user-icon">
								<img src="<?=base_url()?>assets/img/user.png" alt="" />
							</span> <span class="user-name"><?= $userdetail->username ?></span> </a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"> <a class="dropdown-item" href="<?= base_url('Auth/profile') ?>"><i class="dw dw-user1"></i> Profile</a
							>
							
							<a class="dropdown-item" href= "<?php echo site_url('Dashboard/logout'); ?>"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<!-- <div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="<?=base_url()?>assets/vendors/images/github.svg" alt=""
					/></a> </div> --> </div>
			</div>
			<div class="right-sidebar">
				<div class="sidebar-title">
					<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
					<div class="close-sidebar" data-toggle="right-sidebar-close"> <i class="icon-copy ion-close-round"></i> </div>
				</div>
				<div class="right-sidebar-body customscroll">
					<div class="right-sidebar-body-content">
						<h4 class="weight-600 font-18 pb-10">Header Background</h4>
						<div class="sidebar-btn-group pb-30 mb-10"> <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.php">
					<img src="<?=base_url()?>assets/vendors/images/forteHaat.jpg" alt="" class="dark-logo logo" style='width: 200px;height: 60px;' />
					
				</a>
					  <div class="close-sidebar" data-toggle="left-sidebar-close"> <i class="ion-close-round"></i> </div>
						</div>
						<div class="menu-block customscroll">
							<div class="sidebar-menu">
								
								<ul id="accordion-menu">
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
							<ul class="submenu">
								<li><a href="index.html">Dashboard</a></li>
							
							</ul>
						</li> -->
									<li>
										<a href="<?= base_url('Dashboard') ?>" class="dropdown-toggle no-arrow ">
											<!-- <span class="micon bi bi-textarea-resize" ></span
								> --><span class=" micon bi bi-speedometer"></span> <span class="mtext">Dashboard</span> </a>
									</li>
									<li>
										<a href="<?= base_url('Auth/allCategory') ?>" class="dropdown-toggle no-arrow "> <span class="micon "><i class="fa-solid fa-bars"></i></span
								><span class="mtext">All Category</span> </a>
									</li>
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext"> All Category</span>
							</a>
							<ul class="submenu">
								<li><a href="form-basic.html">All category</a></li>
								<li>
									<a href="advanced-components.html">Add new category</a>
								</li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
								<li><a href="html5-editor.html">HTML5 Editor</a></li>
								<li><a href="form-pickers.html">Form Pickers</a></li>
								<li><a href="image-cropper.html">Image Cropper</a></li>
								<li><a href="image-dropzone.html">Image Dropzone</a></li>
							</ul>
						</li> -->
									
									  <li class="dropdown" id="productDropdown">
											<a href="javascript:;" class="dropdown-toggle">
												<span class="micon"><i class="fa-brands fa-product-hunt"></i></span>
												<span class="mtext">Product</span>
											</a>
											<ul class="submenu">
												<li><a href="<?= base_url('Auth/allProduct') ?>">Product List</a></li>
												<li><a href="<?= base_url('Auth/addProduct') ?>">Add New Product</a></li>
											</ul>
										</li>
									
									<li class="dropdown">
										<a href="javascript:;" class="dropdown-toggle"> <span class="micon bi bi-list-ol"></span> <span class="mtext">Order</span> </a>
										<ul class="submenu">
											<li><a href="<?= base_url('Auth/pending_order') ?>">Pending Order</a></li>
											<li><a href="<?= base_url('Auth/completed_order') ?>">Completed Order</a></li>
											<li><a href="<?= base_url('Auth/cancel_order') ?>">Cancel Order</a></li>
											<li><a href="<?= base_url('Auth/allorder') ?>">All Orders</a></li>
										
										</ul>
									</li>
									<li class="dropdown">
										<a href="javascript:;" class="dropdown-toggle"> <span class="micon"><i class="fa-regular fa-user"></i></span
								><span class="mtext">Users</span> </a>
										<ul class="submenu">
											<li><a href="<?= base_url('Auth/addUser') ?>">Add User</a></li>
											<li><a href="<?= base_url('Auth/allUser') ?>">All User</a></li>
											<!-- <li><a href="ionicons.html">Ionicons Icons</a></li>
								<li><a href="themify.html">Themify Icons</a></li>
								<li><a href="custom-icon.html">Custom Icons</a></li> -->
										</ul>
									</li>
									<!-- <li>
										<a href="#" class="dropdown-toggle no-arrow "> <span class="micon "><i class="fa-regular fa-file-lines"></i></span
								><span class="mtext">Report</span> </a>
									</li> -->
									<!-- <li>
							<a href="calendar.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-calendar4-week"></span
								><span class="mtext">Calendar</span>
							</a>
						</li> -->
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-archive"></span
								><span class="mtext"> UI Elements </span>
							</a>
							<ul class="submenu">
								<li><a href="ui-buttons.html">Buttons</a></li>
								<li><a href="ui-cards.html">Cards</a></li>
								<li><a href="ui-cards-hover.html">Cards Hover</a></li>
								<li><a href="ui-modals.html">Modals</a></li>
								<li><a href="ui-tabs.html">Tabs</a></li>
								<li>
									<a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
								</li>
								<li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
								<li><a href="ui-notification.html">Notification</a></li>
								<li><a href="ui-timeline.html">Timeline</a></li>
								<li><a href="ui-progressbar.html">Progressbar</a></li>
								<li><a href="ui-typography.html">Typography</a></li>
								<li><a href="ui-list-group.html">List group</a></li>
								<li><a href="ui-range-slider.html">Range slider</a></li>
								<li><a href="ui-carousel.html">Carousel</a></li>
							</ul>
						</li> -->
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-pie-chart"></span
								><span class="mtext">Charts</span>
							</a>
							<ul class="submenu">
								<li><a href="highchart.html">Highchart</a></li>
								<li><a href="knob-chart.html">jQuery Knob</a></li>
								<li><a href="jvectormap.html">jvectormap</a></li>
								<li><a href="apexcharts.html">Apexcharts</a></li>
							</ul>
						</li> -->
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-earmark-text"></span
								><span class="mtext">Additional Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="video-player.html">Video Player</a></li>
								<li><a href="login.html">Login</a></li>
								<li><a href="forgot-password.html">Forgot Password</a></li>
								<li><a href="reset-password.html">Reset Password</a></li>
							</ul>
						</li> -->
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-bug"></span
								><span class="mtext">Error Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="400.html">400</a></li>
								<li><a href="403.html">403</a></li>
								<li><a href="404.html">404</a></li>
								<li><a href="500.html">500</a></li>
								<li><a href="503.html">503</a></li>
							</ul>
						</li> -->
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-back"></span
								><span class="mtext">Extra Pages</span>
							</a>
							<ul class="submenu">
								<li><a href="blank.html">Blank</a></li>
								<li><a href="contact-directory.html">Contact Directory</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
								<li><a href="product.html">Product</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="profile.html">Profile</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="pricing-table.html">Pricing Tables</a></li>
							</ul>
						</li> -->
									<!-- <li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-hdd-stack"></span
								><span class="mtext">Multi Level Menu</span>
							</a>
							<ul class="submenu">
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li class="dropdown">
									<a href="javascript:;" class="dropdown-toggle">
										<span class="micon fa fa-plug"></span
										><span class="mtext">Level 2</span>
									</a>
									<ul class="submenu child">
										<li><a href="javascript:;">Level 2</a></li>
										<li><a href="javascript:;">Level 2</a></li>
									</ul>
								</li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
								<li><a href="javascript:;">Level 1</a></li>
							</ul>
						</li> -->
									<!-- <li>
							<a href="sitemap.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-diagram-3"></span
								><span class="mtext">Sitemap</span>
							</a>
						</li> -->
									<!-- <li>
							<a href="chat.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-chat-right-dots"></span
								><span class="mtext">Chat</span>
							</a>
						</li> -->
						<li>
										<a href="<?= base_url('bulk_upload_form') ?>" class="dropdown-toggle no-arrow ">
											<!-- <span class="micon bi bi-textarea-resize" ></span
								> --><span class=" micon bi bi-speedometer"></span> <span class="mtext">Import</span> </a>
									</li>
									<li>
										<a href="<?= base_url('Auth/allbanner') ?>" class="dropdown-toggle no-arrow "> <span class="micon "><i class="fa-solid fa-bars"></i></span
								><span class="mtext">All Banner</span> </a>
									</li>
									
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
									<a href="<?= base_url('Auth/profile') ?>" class="dropdown-toggle no-arrow "> <span class="micon"><i class="fa-solid fa-user"></i></span
								><span class="mtext">Profile</span> </a>
									</li>
									<li>
										<a href="<?php echo site_url('Dashboard/logout'); ?>" class="dropdown-toggle no-arrow "> <span class="micon"><i class="fa-solid fa-right-from-bracket"></i></span
								><span class="mtext">Logout</span> </a>
									</li>
									<!-- <li>
							<div class="sidebar-small-cap">Extra</div>
						</li> -->
									<!-- <li>
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-file-pdf"></span
								><span class="mtext">Setting</span>
							</a>
							<ul class="submenu">
								<li><a href="introduction.html">Introduction</a></li>
								<li><a href="getting-started.html">Getting Started</a></li>
								<li><a href="color-settings.html">Color Settings</a></li>
								<li>
									<a href="third-party-plugins.html">Third Party Plugins</a>
								</li>
							</ul>
						</li> -->
									<!-- <li>
							<a
								href="https://dropways.github.io/deskapp-free-single-page-website-template/"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon bi bi-layout-text-window-reverse"></span>
								<span class="mtext"
									>Landing Page
									<img src="<?=base_url()?>assets/vendors/images/coming-soon.png" alt="" width="25"
								/></span>
							</a>
						</li> -->
								</ul>
							</div>
						</div>
					</div>
					<div class="mobile-menu-overlay"></div>


<!-- <script>
    const productDropdown = document.getElementById('productDropdown');
    const submenu = productDropdown.querySelector('.submenu');

    productDropdown.addEventListener('click', () => {
        submenu.classList.toggle('active');
    });
</script> -->
<script>
	// Add event listeners to show/hide submenus
	const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const submenu = dropdown.querySelector('.submenu');
            
            toggle.addEventListener('click', () => {
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            });
            
            dropdown.addEventListener('mouseleave', () => {
                submenu.style.display = 'none';
            });
        });
</script>

<style>
    .submenu {
        display: none;
    }

    .submenu.active {
        display: block;
    }
</style>