
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require "connect.php";
    $name=$_POST['category'];
    $select_cataegory=$connect ->query("INSERT INTO cataegory (name) VALUES('$name')");
if($select_cataegory){
    header("location:../category.php");
}
}
?>
