<?php

require "../admin/functions/connect.php";
$pro_search=$_POST['text_search'];
if($pro_search){
$select_pro=$connect->query("SELECT * FROM product WHERE name LIKE '%$pro_search%'");

foreach ($select_pro as $select_pro){
//  ($search_data as $row_pro){
        $name=$select_pro['name'];
        echo "<a href='#'>$name</a><br>";
    
}
}

?>