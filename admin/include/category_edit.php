

<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Category &nbsp;<?php if(isset($_GET['page'])=='edit'){
     echo"/ تعديل فئة ";
    }?>
      </li>
  </ol>
<?php
$id_category=filter_var($_GET['id_category'],FILTER_SANITIZE_NUMBER_INT);
$category_select=$connect ->query("SELECT * FROM cataegory WHERE id='$id_category'");
$category_details=$category_select -> fetch_assoc();

?>
<form method="post" action="functions/edit_category_mySql.php" style="width: 90%;margin:auto;">
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo$category_details['id']?>"
    <label for="exampleInputEmail1">category</label>
    <input type="text" name="category" placeholder="category name" class="form-control" id="exampleInputEmail1" value="<?php echo$category_details['name'] ?>">
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="تحديث فئة">