<?php
// session_start();
$active="users";
include "design/navbar.php";
include "design/sidebar.php";
?>
<?php
$priv=$_SESSION['login_validate']['priv'];
if($priv==100){
  include "404.php";
  exit();
}
?>
<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">USERS &nbsp;<?php  if(isset($_GET['page'])=='add'){
     echo"/ اضافة مستخدم جديد";
    }?>
      </li>
  </ol>
  
<?php
if(!isset($_GET['page'])){
    include "include/user_view.php";
}elseif ($_GET['page']=='add'){
    include "include/user_add.php";
}elseif ($_GET['page']=='edit'){
    include "include/user_edit.php";
}
?>

<?php
include "design/footer.php";
?>