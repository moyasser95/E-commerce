<?php
$active="products";
include "design/navbar.php";
include "design/sidebar.php";

?>
<div id="content-wrapper">

<div class="container-fluid">

<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Products &nbsp;<?php if(isset($_GET['page'])=='add'){
     echo"/ اضافة منتج جديد";
    }?>
      </li>
  </ol>

   
<?php
if(!isset($_GET['page'])){
    include "include/product_view.php";
}elseif ($_GET['page']=='add'){
    include "include/product_add.php";
}elseif ($_GET['page']=='edit'){
    include "include/product_edit.php";
}
?>



<?php
include "design/footer.php";
?>