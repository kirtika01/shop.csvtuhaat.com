	<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Order Detail</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="<?= base_url('Auth/allorder') ?>">Order List</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Order Detail
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="product-wrap">
						<div class="product-detail-wrap mb-30">
							<div class="row">
								<div class="col-lg-8 col-md-12 col-sm-12">
								    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30 "> 
								    	<h1>Order Detail</h1>
													<table>
														<tr>
															
															<th class="bg-white">Delivery Type</th>
															<td><?= $order->delivery_type ?></td>
														</tr>
														<tr>
															
															<th class="bg-white">User Name</th>
															<td><?= $order->name ?></td>
														</tr>
														<tr>
															<th class="bg-white">Contact No.</th>
															<td><?= $order->contact ?></td>
														</tr>
														
														<tr>
															<tr>
															<th class="bg-white">Moblie Number</th>
															<td><?= $order->email ?></td>
														</tr>

														<?php if( $order->delivery_type == "Take away" ){ 
															?>

	                                                     <tr>
															<th class="bg-white">Location</th>
															<td colspan="2"><?= $order->location ?></td>
														</tr>
														<?php }else{ ?>

														<tr>
															<th class="bg-white">Address</th>
															<td colspan="2"><?= $order->address  ?></td>
														</tr>
														
														<tr>
															<th class="bg-white">Zip/Postal code</th>
															<td colspan="2"><?= $order->zip ?></td>
														</tr>
														<?php } ?>
														<tr>
															<tr>
															<th class="bg-white">Total Quantity</th>
															<td><?= $order->total_qty ?></td>
														</tr>
														<tr>
															<tr>
															<th class="bg-white">Total Amount</th>
															<td>Rs <?= $order->total_price ?></td>
														</tr>
														<tr>
															<th class="bg-white">Order Date</th>
															<td colspan="2"><?= $order->date ?></td>
														</tr>
														<tr>
																<th class="bg-white">Order Status</th>
																<?php if($order->status == '0'){?>
																<td  class="badge bg-warning mt-2" >Pending</td>
																<?php }else if($order->status == '1'){ ?>
																	<td class="badge bg-danger mt-2">Cancelled </td>
																<?php }else if($order->status == '2') { ?>
																	<td class="badge bg-success mt-2">Delivered</td>
																<?php } ?>  	
														</tr>
														<?php if($order->status == '0'){?>
														<tr>
															<th class="bg-white">Update Order Status</th>
															<th class="bg-white" id="status">
															   <button class="btn btn-danger update-status-btn"  value="1"  onclick="showConfirmation(<?= $order->id ?>,1)">Cancel</button>
															   <button class="btn btn-success update-status-btn"  value="2"  onclick="showConfirmation(<?= $order->id ?>,2)">Deliver</button>

	                                                        </th>

	    
														</tr>
														<?php } ?>
													</table>	 
                                     </div>
                                     <div class="col-md-4"></div>
				                    <div class="col-md-12">   
				                       <table class="table table-hover table-bordered">
				                            <tr>
				                                <th>SNo</th>
				                                <th>Product Name</th>
				                                <th>Quantity</th>
				                                <th>Price</th>
				                                
				                            </tr>
				                            <?php
				                            $i = 0;

				                              $view_order_detail = $this->db->where('order_id', $order->id)->get('order_product_tbl')->result();

				                             //print_r($view_order_detail);
				                            foreach ($view_order_detail as $row) {

				                                $product = $this->db->where('id', $row->product_id)->get('product_tbl')->row();
				                                

				                            ?>
				                                <tr>
				                                    <td><?= ++$i ?></td>
				                                    <td><?= $product->product_name ?></td>
				                                    <td><?= $row->product_qty ?></td>
				                                    <td><?= $product->product_sales_price ?></td>
				                                </tr>
				                            <?php } ?>
				                        </table>
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
<script type="text/javascript">

function showConfirmation(order_id, status) {
	
if (confirm('Are You Sure ?')) {
     $.ajax({
        url: '<?= base_url();  ?>Auth/update_order_status', // Replace with your controller method URL
        type: 'POST',
        data: { order_id: order_id,status: status},
        success: function(response) {
            
            console.log(response);

             location.reload();
        },
        error: function(xhr, textStatus, errorThrown) {
            // Handle error if needed
            console.error(errorThrown);
        }
    });
} 
   
}
</script>