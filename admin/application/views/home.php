<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Dashboard</h4> </div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?=base_url()?>Dashboard">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"> Dashboard </li>
						</ol>
					</nav>
				</div>
				
			</div>
		</div>
		<?php 
            $product = $this->db->select('*')->from('product_tbl')->get()->result();
            $totalproducts = count($product);
            //print_r( $totalproducts);
		?>
		<div class="row clearfix progress-box">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card-box pd-30 height-100-p">
					<div class="progress-box text-center">
	<input type="text" class="" value="<?= $totalproducts ?>" style="border:none;font: bold 24px Arial;
    text-align: center;
    color: rgb(27, 0, 255);" readonly />
						
						<h5 class="text-blue padding-top-10 h5">Total Product</h5> <!-- <span class="d-block"><?= $totalproducts?><i class="fa fa-line-chart text-blue"></i
								></span> --> </div>
				</div>
			</div>
				<?php 
                    $category = $this->db->select('*')->from('category_tbl')->get()->result();
                    $totalcategory = count($category);
				?>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card-box pd-30 height-100-p">
					<div class="progress-box text-center">
						<input type="text" class="" value="<?= $totalcategory ?>" style="border:none;font: bold 24px Arial;
					    text-align: center;
					    color: #00e091;" readonly />
										
						<h5 class="text-light-green padding-top-10 h5">
									Total Categories
								</h5> <!-- <span class="d-block"><?= $totalcategory ?> <i class="fa text-light-green fa-line-chart"></i
								></span> --> </div>
				</div>
			</div>
			<?php 
                    $user = $this->db->select('*')->from('user_tbl')->get()->result();
                    $totaluser = count($user);
				?>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card-box pd-30 height-100-p">
					<div class="progress-box text-center">
						<input type="text" class="" value="<?= $totaluser ?>" style="border:none;font: bold 24px Arial;
					    text-align: center;
					    color: #f56767;" readonly />
						<h5 class="text-light-orange padding-top-10 h5">
									Total User
								</h5> <!-- <span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i
								></span> --> </div>
				</div>
			</div>
			<?php 
                    $order = $this->db->select('*')->from('order_tbl')->get()->result();
                    $totalorder = count($order);
				?>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
				<div class="card-box pd-30 height-100-p">
					<div class="progress-box text-center">
						<input type="text" class="" value="<?= $totalorder ?>" style="border:none;font: bold 24px Arial;
					    text-align: center;
					    color: #a683eb;" readonly />
									Total Orders
								</h5><!--  <span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i
								></span> --> </div>
				</div>
			</div>
		</div>
		<!-- <div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 pt-10 height-100-p">
							<h2 class="mb-30 h4">Browser Visit</h2>
							<div class="browser-visits">
								<ul>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="vendors/images/chrome.png" alt="" />
										</div>
										<div class="browser-name">Google Chrome</div>
										<div class="visit">
											<span class="badge badge-pill badge-primary">50%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="vendors/images/firefox.png" alt="" />
										</div>
										<div class="browser-name">Mozilla Firefox</div>
										<div class="visit">
											<span class="badge badge-pill badge-secondary">40%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="vendors/images/safari.png" alt="" />
										</div>
										<div class="browser-name">Safari</div>
										<div class="visit">
											<span class="badge badge-pill badge-success">40%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="vendors/images/edge.png" alt="" />
										</div>
										<div class="browser-name">Microsoft Edge</div>
										<div class="visit">
											<span class="badge badge-pill badge-warning">20%</span>
										</div>
									</li>
									<li class="d-flex flex-wrap align-items-center">
										<div class="icon">
											<img src="vendors/images/opera.png" alt="" />
										</div>
										<div class="browser-name">Opera Mini</div>
										<div class="visit">
											<span class="badge badge-pill badge-info">20%</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 pt-10 height-100-p">
							<h2 class="mb-30 h4">World Map</h2>
							<div
								id="browservisit"
								style="width: 100% !important; height: 380px"
							></div>
						</div>
					</div>
				</div> -->
				<?php 
				    $today = date('Y-m-d');
                    $order = $this->db->select('*')->from('order_tbl')->where('date',$today)->get()->result();
                    
				?>
		<div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-blue h4">Today's order</h4> </div>
			<div class="pb-20">
				<table class="table hover multiple-select-row data-table-export nowrap">
					<thead>
						<tr>
							<th>S. No.</th>
							<th class="table-plus">User Name</th>
							<th>Delivery Type</th>
							<th>Moblie Number</th>
										<!-- <th>Start date</th> -->
							<th>E-mail</th>
							<th>Total Amount</th>
							<th>Total Quantity</th>
							<th>Order Date</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							              if (!empty($order)) {
                                                $i = 0;
                                                foreach ($order as $row) {
                                                  $i++;
                                                  
                                                    
          
                                                echo"<tr>
                                                    <td> $i </td>
                                                    <td>$row->name</td>
                                                    <td>$row->delivery_type</td>
                                                    <td>$row->contact</td>
                     
                                                    <td>$row->email</td>
                                                    <td>$row->total_price</td>
                                                    <td>$row->total_qty</td>
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
																<a class="dropdown-item" href="<?= site_url('Auth/view_order/'.$row->id)?>"
																	><i class="dw dw-eye"></i> View</a
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
									
						<!-- <tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>20</td>
									<td>Gemini</td>
									<td>2829 Trainer Avenue Peoria, IL 61602</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Sagittarius</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>25</td>
									<td>Gemini</td>
									<td>2829 Trainer Avenue Peoria, IL 61602</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>20</td>
									<td>Sagittarius</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>18</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Sagittarius</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Sagittarius</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="table-plus">Andrea J. Cagle</td>
									<td>30</td>
									<td>Gemini</td>
									<td>1280 Prospect Valley Road Long Beach, CA 90802</td>
									<td>29-03-2018</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
												href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i>
													Delete</a>
											</div>
										</div>
									</td>
								</tr> -->
					</tbody>
				</table>
			</div>
		</div>
		<!-- <div class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<h4 class="mb-30 h4">Compliance Trend</h4>
							<div id="compliance-trend" class="compliance-trend"></div>
						</div>
					</div>
					<div class="col-lg-5 col-md-12 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<h4 class="mb-30 h4">Records</h4>
							<div id="chart" class="chart"></div>
						</div>
					</div>
				</div> -->
		<!-- <div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div> --></div>
</div>