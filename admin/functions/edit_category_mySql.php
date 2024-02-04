<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require "connect.php";
    $id=$_POST['id'];
    $name=$_POST['category'];

    $select_category=$connect->query("UPDATE cataegory SET name='$name' WHERE id='$id'");

    if($select_category){
        header("location:../category.php");
    }
}
?>