<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
   require "connect.php";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $priv = $_POST['priv'];

    $password_hash=password_hash($password,PASSWORD_DEFAULT);

    $select_user=$connect ->query("SELECT * FROM user WHERE email='$email'");

    $email_count=$select_user -> num_rows;
    if($email_count > 0){
      header("location:../users.php?page=add&error=the email is using already");
   }
    else{
      $insert_user = $connect -> query("INSERT INTO user (name,email,password,gender,priv) 
      VALUES('$name','$email','$password_hash','$gender','$priv')");

     if($insert_user){
        header("location:../users.php");
     }

    }
    
}




?>