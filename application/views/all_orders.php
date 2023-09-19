
<br>
<div class="container">
	<div class="col-sm-12" style="background: white;box-shadow: 0 0 10px #ddd;">
		<h2>Order Details</h2>
		<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
									
										<th>#</th>
										<th class="table-plus"> Name</th>
										<th>Delivery Type</th>
										<th>Moblie </th>
										<!-- <th>Start date</th> -->
										<th>E-mail</th>
										<th> Amount</th>
										<th> Quantity</th>
										<th> Date</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
							              if (!empty($orders)) {
                                                $i = 0;
                                                foreach ($orders as $row) {
                                                  $i++;
                                                  
                                                     $product = $this->db->select('*')->from('category_tbl')->where('id',$row->product_category_id)->get()->row();
                                                    // print_r($orderlist);
                                                    // die();
                                                echo"<tr>
                                                    <td> #CFH000$row->id </td>
                                                    <td>$row->name</td>
                                                    <td>$row->delivery_type</td>
                                                    <td>$row->contact</td>
                     
                                                    <td>$row->email</td>
                                                    <td>$row->total_price</td>
                                                    <td>$row->total_qty</td>
                                                    <td>$row->date</td>";?>
                                                    <th>
														<a href="<?= base_url() ?>base/order_success?id=<?= $row->id ?>">View</a>
                                                    </th>
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
</br>