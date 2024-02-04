<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
require "connect.php";
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$count=$_POST['count'];
$categorey=$_POST['category'];

$image=$_FILES['image']['name'];
$image_em=$_FILES['image']['name']['0'];
// if(empty($image_em)){
//     echo "yes";
// }else{
//     echo "no";
// }

if(empty($image_em)){
    // $select_product=$connect ->query("SELECT * FROM product WHERE id='$id'");
    // $product_details=$select_product ->fetch_assoc();
    // $old_image=$product_details['image'];
    
    $update_product=$connect ->query("UPDATE product SET name='$name',price='$price',sale='$sale',count='$count',category='$categorey' WHERE id='$id'");

    if($update_product){
        header("location:../products.php");
    }
    
}else{

    foreach ($image as $key => $value){

        if($_FILES['image']['error'][$key]==0){
    
            $extentions=array("jpg","png","gif","jpeg");
            $image_ex=pathinfo($image[$key],PATHINFO_EXTENSION);
            
            if(in_array($image_ex,$extentions)){
                if($_FILES['image']['size'][$key]<=2000000){
                    $image_name=md5(uniqid()).".".$image_ex;

                    $image_array[]=$image_name;

                    move_uploaded_file($_FILES['image']['tmp_name'][$key],"../images/".$image_name);
        
                }else{
                    header("location:../products.php?page=add&error=file must be lessthan 1MB");
                }
            }else{
                header("location:../products.php?page=add&error=Not Support File Extenstion");
        
            }
        }else{
            header("location:../products.php?page=add&error=The File Not Uploded");
        
        }
    }
    // print_r($image_array);
        echo $new_image_name=implode("+", $image_array);
        
        $update_product=$connect ->query("UPDATE product SET name='$name',price='$price',sale='$sale',count='$count',image='$new_image_name', category='$categorey' WHERE id='$id'");

    if($update_product){
        header("location:../products.php");
    }
    }
    

}
?>