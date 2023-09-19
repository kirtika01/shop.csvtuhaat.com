	<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Product Detail</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="<?= base_url('Auth/allProduct') ?>">Product List</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Product Detail
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="product-wrap">
						<div class="product-detail-wrap mb-30">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12">
								    <div id="productImageCarousel" class="carousel slide" style="margin-top:65px;"  data-ride="carousel">
										<ol class="carousel-indicators">
											<?php foreach ($image_paths as $key => $image_path) : ?>
												<li data-target="#productImageCarousel" data-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>"></li>
											<?php endforeach; ?>
										</ol>
										
										<div class="carousel-inner">
											<?php foreach ($image_paths as $key => $image_path) : ?>
												<div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
													<img src="<?= base_url($image_path) ?>" class="d-block w-100" alt="Product Image">
												</div>
											<?php endforeach; ?>
										</div>
										
										<a class="carousel-control-prev" href="#productImageCarousel" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#productImageCarousel" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>

								</div>
								<?php $category = $this->db->select('*')->from('category_tbl')->where('id',$product->id)->get()->row(); ?>
											<!-- product details -->
											<div class="col-lg-6 col-md-12 col-sm-12">
											   <div class="pd-20 bg-white border-radius-4 box-shadow mb-30 "> 
													<h1>Product Detail</h1>
													<table>
													<tr>
														
														<th class="bg-white">Product Name</th>
														<td><?= $product->product_name ?></td>
													</tr>
													<tr>
														<th class="bg-white">Product ID</th>
														<td><?= $product->product_id ?></td>
													</tr>
													<tr>
														<th class="bg-white">Category</th>
														<td colspan="2"><?= $category->category_name  ?></td>
													</tr>
													<tr>
														<th class="bg-white">Regular Price</th>
														<td colspan="2"><?= $product->product_regular_price ?></td>
													</tr>
													<tr>
														<th class="bg-white">Sell Price</th>
														<td colspan="2"><?= $product->product_sales_price ?></td>
													</tr>
													<tr>
														<th class="bg-white">Weight</th>
														<td colspan="2"><?= $product->product_weight ?></td>
													</tr>
													<tr>
														<th class="bg-white">Description</th>
														<td colspan="2"><?= $product->product_description ?></td>
													</tr>
													<tr>
															<th class="bg-white">Product Stock Status</th>
															<?php if($product->product_stock_status == '0'){?>
															<td colspan="2" class="badge bg-success mt-2" >In Stock</td>
															<?php }else if($product->product_stock_status == '1'){?>
																<td colspan="2" class="badge bg-danger mt-2">Out Of Stock</td>
															<?php }else if($product->product_stock_status == '2'){?>
																<td colspan="2" class="badge bg-warning mt-2">On Backorder</td>
															<?php } ?>
													</tr>
													</table>
												
													<a href="<?= site_url('Auth/edit_product/'.$product->id)?>"><button class="edit-btn">Edit</button></a>
													<a href="<?= site_url('Auth/delete_product/'.$product->id)?>"><button class="delete-btn">Delete</button></a>
												 
												</div>
											</div>
											<!-- Additional sections can be added as needed (e.g., product specifications, inventory, etc.) -->
										
											
									</div>
								</div>
							</div>
						</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('.product-slider-outer').slick({
        // Outer Slider options can be configured here
        dots: true,  // Disable navigation dots for the outer slider
        // Add more options as needed
    });
    
    $('.product-slider-inner').slick({
        // Inner Slider options can be configured here
        dots: true,  // Show navigation dots for the inner slider
        autoplay: true,  // Auto-play the inner slider
        // Add more options as needed
    });
});
</script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
