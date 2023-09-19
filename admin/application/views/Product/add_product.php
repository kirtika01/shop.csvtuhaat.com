<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Add New Product</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?=base_url()?>Dashboard">Home</a>
										</li>

										<li class="breadcrumb-item active" aria-current="page">
											Add New Product
										</li>
									</ol>
								</nav>
							</div>
							<!-- <div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-secondary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										August 2023
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					
					<!-- Default Basic Forms End -->

					<!-- horizontal Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						
						<form action="<?= base_url('Auth/insertProduct') ?>" method="post" enctype="multipart/form-data">

							<div class="form-group">
								<label class="required">Product Id:</label>
								<input
									class="form-control"
									type="text"
									placeholder=" "
									name="product_id"
									required
								/>
							</div>
							<div class="form-group">
								<label class="required">Product Name:</label>
								<input
									class="form-control"
									type="text"
									placeholder=" "
									name="product_name"
									required
								/>
							</div>
							<div class="form-group">
							<label class="required" for="product-category">Product Category:</label>
							    <select required name="product_category_id" class="selection" style="width: 100%; height: 45px; border-radius: 8px; border-color: gray; "  required>
                                   <option value="">Select Category</option>
								    <?php if(!empty($category))
                                        {
                                            foreach($category as $row){
                                    ?>
                                            
                                    <option value='<?php echo $row->id;?>' id='product_category' class='product_category' ><?php echo $row->category_name;?></option>

                                    <?php }}?>
								</select>

								

							</div>
							
						    <div class="form-group">
								<label class="required">Product Video:</label>
								<input
									class="form-control"
									value=" "
									type="url"
									name="product_video"
									required
								/>
								<!-- <input type="file" name="product_video" class="form-control" accept="video/mp4,video/x-m4v,video/*" required/> -->
								
							</div> 
							<div class="form-group">
								<label class="required">Regular Price(₹):</label>
								<input
									class="form-control"
									value=" "
									type="number"
									name="product_regular_price"
									required
								/>
							</div>
							<div class="form-group">
								<label class="required">Sales Price(₹):</label>
								<input
									class="form-control"
									value=" "
									type="number"
									name="product_sales_price"
									required
								/>
							</div>
							<div class="form-group">
								<label class="required">Specification:</label>
								<input
									class="form-control"
									value=""
									type="text"
									name="product_weight"
									required
								/>
							</div>
							
							
							<!-- <div class="form-group">
								<label>Readonly input</label>
								<input
									class="form-control"
									type="text"
									placeholder="Readonly input here…"
									readonly
								/>
							</div>
							<div class="form-group">
								<label>Disabled input</label>
								<input
									type="text"
									class="form-control"
									placeholder="Disabled input"
									disabled=""
								/>
							</div> -->
							<div class="form-group">
								<div class="row">
									
									<div class="col-md-6 col-sm-12">
										<label class="weight-600 required">Stock Status:</label>
										<div class="custom-control custom-radio mb-5">
											<input
												type="radio"
												id="customRadio1"
												name="product_stock_status"
												class="custom-control-input"
												value="0"
												required
											/>
											<label class="custom-control-label" for="customRadio1"
												>In Stock</label
											>
										</div>
										<div class="custom-control custom-radio mb-5">
											<input
												type="radio"
												id="customRadio2"
												name="product_stock_status"
												class="custom-control-input"
												value="1"
											/>
											<label class="custom-control-label" for="customRadio2"
												>Out Of Stock</label
											>
										</div>
										<div class="custom-control custom-radio mb-5">
											<input
												type="radio"
												id="customRadio3"
												name="product_stock_status"
												class="custom-control-input"
												value="2"
											/>
											<label class="custom-control-label" for="customRadio3"
												>On Backorder</label
											>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="form-group">
								<label>Disabled select menu</label>
								<select class="form-control" disabled="">
									<option>Disabled select</option>
								</select>
							</div>
							<div class="form-group">
								<label>input plaintext</label>
								<input
									type="text"
									readonly
									class="form-control-plaintext"
									value="email@example.com"
								/>
							</div> -->
							<div class="form-group">
								<label class="required">Product Description:</label>
								
								<textarea class="form-control" name="product_description" required></textarea>
							</div>
							<!-- <div class="form-group">
								<label>Help text</label>
								<input type="text" class="form-control" />
								<small class="form-text text-muted">
									Your password must be 8-20 characters long, contain letters
									and numbers, and must not contain spaces, special characters,
									or emoji.
								</small>
							</div> -->
							<!-- <div class="form-group">
								<label>Example file input</label>
								<input
									type="file"
									class="form-control-file form-control height-auto"
								/>
							</div> -->
							<div class="form-group">
								<label class="required">Product Image:</label>
								<div class="custom-file">
								<input type="file" name="product_image[]"  id="file-input" class="form-control" accept="image/png, image/gif, image/jpeg, image/*"  multiple="multiple" required/>
								<label for="file-input" id="file-label"></label>
								</div>
							</div>
							<!-- for add product button -->
							
                            <p class="submit " >
								
		                        <input style=" padding: 4px; border-radius: 5px; background-color:#2626f4; color:white;"
							       type="submit" 
							       name="submit" 
								   id="submit" 
								   class="button button-primary " 
								   value="Add Product" >		
								   <span class="spinner">

								   </span>
	                        </p>
							
						</form>
						<div class="collapse collapse-box" id="horizontal-basic-form1">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#horizontal-basic"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#horizontal-basic-form1"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="horizontal-basic">
<!-- <form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" value="bootstrap@example.com" type="email">
	</div>
	<div class="form-group">
		<label>URL</label>
		<input class="form-control" value="https://getbootstrap.com" type="url">
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input class="form-control" value="1-(111)-111-1111" type="tel">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" value="password" type="password">
	</div>
	<div class="form-group">
		<label>Readonly input</label>
		<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
	</div>
	<div class="form-group">
		<label>Disabled input</label>
		<input type="text" class="form-control" placeholder="Disabled input" disabled="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Checkbox</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck1-1">
					<label class="custom-control-label" for="customCheck1-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck2-1">
					<label class="custom-control-label" for="customCheck2-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck3-1">
					<label class="custom-control-label" for="customCheck3-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck4-1">
					<label class="custom-control-label" for="customCheck4-1">Check this custom checkbox</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Radio</label>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio5">Or toggle this other custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Disabled select menu</label>
		<select class="form-control" disabled="">
			<option>Disabled select</option>
		</select>
	</div>
	<div class="form-group">
		<label>input plaintext</label>
		<input type="text" readonly class="form-control-plaintext" value="email@example.com">
	</div>
	<div class="form-group">
		<label>Textarea</label>
		<textarea class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Help text</label>
		<input type="text" class="form-control">
		<small class="form-text text-muted">
		  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		</small>
	</div>
	<div class="form-group">
		<label>Example file input</label>
		<input type="file" class="form-control-file form-control height-auto">
	</div>
	<div class="form-group">
		<label>Custom file input</label>
		<div class="custom-file">
			<input type="file" class="custom-file-input">
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
</form> -->

</code></pre>
							</div>
						</div>
					</div>
					<!-- horizontal Basic Forms End -->

					<!-- Form grid Start -->
					
					<!-- Input Validation End -->
				</div>
				
			</div>
		</div>
		<!-- welcome modal start -->
		<!-- <div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button> -->
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->


	<style>
        #file-label {
            display: block;
        }
    </style>
	<script>
        const fileInput = document.getElementById('file-input');
        const fileLabel = document.getElementById('file-label');

        fileInput.addEventListener('change', function() {
            const files = Array.from(this.files).map(file => file.name);
            if (files.length > 0) {
                fileLabel.textContent = files.join(', ');
            } else {
                fileLabel.textContent = '';
            }
        });
    </script>