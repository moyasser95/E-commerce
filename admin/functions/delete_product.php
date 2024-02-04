<?php
require "connect.php";
$id=filter_var($_GET['product_id'],FILTER_SANITIZE_NUMBER_INT);
// delete product image
$select_product=$connect ->query("SELECT * FROM product WHERE id='$id'");
$product_details= $select_product->fetch_assoc();
$product_image=$product_details['image'];
unlink("../images/$product_image");

// Delete product
$delete_product=$connect->query("DELETE FROM product WHERE id='$id'");
if($delete_product){
    header("location:../products.php");
}
?>