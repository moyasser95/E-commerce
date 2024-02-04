<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    require "connect.php";
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select_user=$connect ->query("SELECT * FROM user WHERE email='$email'");
    $user_details=$select_user -> fetch_assoc();
    $id=$user_details['id'];
    $password_mysql=$user_details['password'];
    $email_count=$select_user -> num_rows;

    if($email_count > 0){
    if(password_verify($password,$password_mysql)){
        $_SESSION['login_validate']=$user_details;
        header("location:../index.php");
        }else{
                 header("location:../login.php?error=password incorrect");
             }
        }else{
                header("location:../login.php?error=email incorrect");
             }
            
    }

?>