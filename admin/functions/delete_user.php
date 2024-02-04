<?php
require "connect.php";

$id=filter_var($_GET['user_id'],FILTER_SANITIZE_NUMBER_INT);
$delete_user=$connect ->query("DELETE FROM user WHERE id='$id'");

if($delete_user){
    header("location:../users.php");
}

?>