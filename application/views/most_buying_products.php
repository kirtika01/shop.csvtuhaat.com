<!DOCTYPE html>
<html>
<head>
    <title>Most Buying Products</title>
</head>
<body>
    <h1>Most Buying Products</h1>
   <div>
       <?php
       $productList = $this->db->select('product_id')->from('order_product_tbl')->get()->result();
       // print_r($productList);
$productCounts = [];
foreach ($productList as $product) {
    $count = $this->db->where('product_id', $product->product_id)->from('order_product_tbl')->count_all_results();
    $productCounts[$product->product_id] = $count;
}

arsort($productCounts); // Sort the products by order count in descending order

$topProducts = [];
$count = 0;
foreach ($productCounts as $productId => $orderCount) {

    if ($count >= 4) {
        break;
    }
    
    $productData = $this->db->where('id', $productId)->from('product_tbl')->get()->row();
    
    if ($productData) {
        $topProducts[] = ['p_id' => $productId,'name' => $productData->product_name,'image'=>$productData->product_image, 'order' => $orderCount];
    }
    
    $count++;
}
echo "<pre>";
print_r($topProducts);
foreach ($topProducts as $product) {
    //print_r($product);
    echo"<div>";
    echo"<h3>{$product['p_id']}</h3>";
    echo"<h3>{$product['name']}</h3>";
    echo"<p>No. of Orders:{$product['order']}</p>";
    
    echo"</div>";
}
?>
   </div>
</body>
</html>