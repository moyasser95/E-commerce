<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
require "../admin/functions/connect.php";
$name=$_POST['N_name'];
$subject=$_POST['N_subject'];
$email=$_POST['N_email'];
$phone=$_POST['N_phone'];
$message=$_POST['N_message'];

$insert_message = $connect -> query("INSERT INTO send_message (name,subject,email,phone,message,status) VALUES ('$name','$subject','$email','$phone','$message',0)");
if($insert_message){
    echo "<div class='alert alert-success'>messge sent</div>";
}


}

?>