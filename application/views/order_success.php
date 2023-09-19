<?php 
	$id = $_GET['id'];
	$order = $this->db->where('id',$id)->get('order_tbl')->row();
	$products = $this->db->where('order_id',$id)->get('order_product_tbl')->result();
?>
<br>
<div class="container">
	<div class="col-sm-12 " style="background: white;box-shadow: 0 0 10px #ddd;">
		<h2>Order Details</h2>
		<table class="table table-borderd">
			<tr>
				<td>Order ID</td>
				<th>#CFH00<?= $order->id ?></th>
			</tr>
			<tr>
				<td>Name</td>
				<th><?= $order->name ?></th>
			</tr>
			<tr>
				<td>Contact</td>
				<th><?= $order->contact ?></th>
			</tr>
			<tr>
				<td>Email</td>
				<th><?= $order->email ?></th>
			</tr>
			<tr>
				<td>Delivery Type</td>
				<th><?= $order->delivery_type ?></th>
			</tr>
			<?php if( $order->delivery_type == "Take away" ){ ?>
			<tr>
				<td>Pickup Location</td>
				<th><?= $order->location ?></th>
			</tr>
		<?php }else{  ?>
			<tr>
				<td>ZIP Code</td>
				<th><?= $order->zip ?></th>
			</tr>
			<tr>
				<td>Address</td>
				<th><?= $order->address ?></th>
			</tr>
		<?php } ?>
			<tr>
				<td>Total Price</td>
				<th><?= $order->total_price ?>/-</th>
			</tr>
		</table>
	<!-- </div> -->
	<!-- <div class="col-sm-12"> -->
		<h2>Product Details</h2>
		<table class="table table-hover table-bordered">
				                            <tr>
				                                <th>SNo</th>
				                                <th>Product Name</th>
				                                <th>Quantity</th>
				                                <th>Price</th>
				                                
				                            </tr>
				                            <?php
				                            $i = 0;

				                           

				                             //print_r($view_order_detail);
				                            foreach ($products as $row) {

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
				                        <br>
	</div>
</div>
</br>