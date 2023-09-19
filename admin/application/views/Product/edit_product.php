<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Edit Product</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?=base_url()?>Dashboard">Home</a>
										</li>

										<li class="breadcrumb-item active" aria-current="page">
											Edit Product
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
						<?php //print_r($product);die;?>
						<form action="<?= base_url('Auth/updateProduct/'.$product->id) ?>" method="post" enctype="multipart/form-data">

							<div class="form-group">
								<label class="required">Product Id:</label>
								<input
									class="form-control"
									type="text"
									placeholder=" "
                                    value="<?= $product->product_id?>"
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
                                    value="<?= $product->product_name?>"
									name="product_name"
									required
								/>
							</div>
                            <?php 
							error_reporting(0); $category = $this->db->select('*')->from('category_tbl')->where('id',$product->product_category_id)->get()->row();?>
							<div class="form-group">
							    <label class="required" for="product-category">Product Category:</label>
							    <select required name="product_category" class="selection" style="width: 100%; height: 45px; border-radius: 8px; border-color: gray; "  required>
                                   <option value="<?= $category->id?>"><?= $category->category_name?></option>
								    <?php if(!empty($allcategory)){
                                         $selectedCategoryId = $category->id; // Get the selected category ID

                                         foreach ($allcategory as $row) {
                                             if ($row->id != $selectedCategoryId) {
                                                 echo '<option value="' . $row->id . '">' . $row->category_name . '</option>';
                                             }
                                         }

                                       }?>
								</select>
							</div>
							<?php //print_r($product->product_video);?>
						    <div class="form-group">
								<label class="required">Product Video:</label>
								<input
									class="form-control"
									type="url"
                                    value="<?= $product->product_video?>"
									name="product_video"
									required
								/>
								<!-- <input type="file" name="product_video" class="form-control" accept="video/mp4,video/x-m4v,video/*" required/> -->
								
							</div> 
							<div class="form-group">
								<label class="required">Regular Price(₹):</label>
								<input
									class="form-control"
									type="number"
                                    value="<?= $product->product_regular_price?>"
									name="product_regular_price"
									required
								/>
							</div>
							<div class="form-group">
								<label class="required">Sales Price(₹):</label>
								<input
									class="form-control"
									type="number"
                                    value="<?= $product->product_sales_price?>"
									name="product_sales_price"
									required
								/>
							</div>
							<div class="form-group">
								<label class="required">Weight(kg):</label>
								<input
									class="form-control"
									type="number"
                                    value="<?= $product->product_weight?>"
									name="product_weight"
									required
								/>
							</div>
							
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
                                                <?= $product->product_stock_status == 0 ? 'checked' : '' ?>
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
                                                <?= $product->product_stock_status == 1 ? 'checked' : '' ?>
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
                                                <?= $product->product_stock_status == 2 ? 'checked' : '' ?>
											/>
											<label class="custom-control-label" for="customRadio3"
												>On Backorder</label
											>
										</div>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="required">Product Description:</label>
								
								<textarea class="form-control" name="product_description" required><?= $product->product_description ?></textarea>
							</div>
							
							<div class="form-group">
								<label class="required">Product Image:</label>
								<div class="custom-file">
								<input type="file" name="product_image[]"  id="file-input" class="form-control" accept="image/png, image/gif, image/jpeg, image/*"  multiple="multiple"/>
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
								   value="Update Product" >		
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