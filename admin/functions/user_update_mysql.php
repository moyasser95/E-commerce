<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require "connect.php";

    $id=$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $priv = $_POST['priv'];

    $password_hash= password_hash($password,PASSWORD_DEFAULT);

    $update_user=$connect ->query("UPDATE user SET name='$name',email='$email',password='$password_hash',gender='$gender',priv='$priv' WHERE id='$id'");
        if($update_user){
            header("location:../users.php");
        }

    // $select_user=$connect ->query("SELECT * FROM user WHERE email='$email'");

    // $count_email=$select_user -> num_rows;
    
    // if($count_email > 0){
    //     header("location:../users.php?page=edit&error=the email is using already");
    // }else{
        
    // }
    }






?>