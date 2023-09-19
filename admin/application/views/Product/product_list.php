<?php error_reporting(0); ?>
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Product List</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?=base_url()?>Dashboard">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Product List
										</li> 
									</ol>
								</nav>
							</div>
							<!--<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
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
					<!-- Simple Datatable start -->
					 <div class="card-box mb-30">
						<div class="pd-20">
							<!-- <h4 class="text-blue h4">All Products</h4> -->
							<!-- <p class="mb-0">
								you can find more options
								<a
									class="text-primary"
									href="https://datatables.net/"
									target="_blank"
									>Click Here</a
								>
							</p> -->
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
									
										<th>Product Id</th>
										<th class="table-plus">Product Name</th>
										<th>Product Category</th>
										<!-- <th>Start date</th> -->
										<th>Price</th>
										<th>Product Description</th>
										<th>Date</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
							              if (!empty($product)) {
                                                $i = 0;
                                                foreach ($product as $row) {
                                                  $i++;
                                                  
                                                     $category = $this->db->select('*')->from('category_tbl')->where('id',$row->product_category_id)->get()->row();
                                                    // print_r($orderlist);
                                                    // die();
                                                echo"<tr>
                                                    <td>$row->product_id</td>
                                                    <td>$row->product_name</td>
                                                    <td>$category->category_name</td>
                                                    <td>$row->product_regular_price	</td>
                                                    <td>$row->product_description</td>
                                                    <td>$row->date</td>";?>
                                                    <td>
														<div class="dropdown" >
															<a
																class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
																href="#"
																role="button"
																data-toggle="dropdown"
															>
																<i class="dw dw-more"></i>
															</a>
															<div
																class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
															>
																<a class="dropdown-item" href="<?= site_url('Auth/view_product/'.$row->id)?>"
																	><i class="dw dw-eye"></i> View</a
																>
																<a class="dropdown-item" href="<?= site_url('Auth/edit_product/'.$row->id)?>"
																	><i class="dw dw-edit2"></i> Edit</a
																>
																<a class="dropdown-item" href="<?= site_url('Auth/delete_product/'.$row->id)?>"
																	><i class="dw dw-delete-3"></i> Delete</a
																>
															</div>
														</div>
                                                    </td>
                                                 </tr>
                                                   
                                                <?php   }
                                                } else {
                                                    echo "<tr><td colspan='4'>Order(s) not available.</td></tr>";
                                                }
								?>
									
								</tbody>
							</table>
						</div>
					</div> 
				</div>
				<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> -->
			</div>
		</div>

        <noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<script>
			 function actions()
			 {
			    $('#action').css('display','block'); 
			 }
			 function actionout()
			 {
			    $('#action').css('display','none'); 

			 }

		</script>