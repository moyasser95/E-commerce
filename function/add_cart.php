<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
require "../admin/functions/connect.php";
$id_product=$_POST['id_product'];

$select_cart=$connect ->query("SELECT * FROM cart WHERE id_product='$id_product' AND id_user=1");
$num_cart=$select_cart->num_rows;
$data_cart=$select_cart->fetch_assoc();//$data_cart = $select_details//
$old_count=$data_cart['count'];

if($num_cart==0){
    $connect->query("INSERT INTO cart (id_product,id_user,count) VALUES ('$id_product',1,1)");
}else{
    $connect->query("UPDATE cart SET count=$old_count+1 WHERE id_product='$id_product' AND id_user=1");
}
}

?>