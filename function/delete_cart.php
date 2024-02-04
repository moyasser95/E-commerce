<?php
require "../admin/functions/connect.php";
$id=$_POST['id_product'];
$delete_pro=$connect->query("DELETE FROM cart WHERE id_product='$id'");

$select_cart=$connect->query("SELECT * FROM cart");
$total=0;
foreach ($select_cart as $select_cart ){
    $id_product=$select_cart['id_product'];
    $select_pro=$connect->query("SELECT * FROM product WHERE id='$id_product'")->fetch_assoc();
    $total+=$select_cart["count"]*$select_pro["price"];
    
}
echo $total;

?>