

<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Category &nbsp;<?php if(isset($_GET['page'])=='add'){
     echo"/ اضافة فئة جديد";
    }?>
      </li>
  </ol>


<form method="post" action="functions/add_category_mySql.php" style="width: 90%;margin:auto;">
  <div class="form-group">
    <label for="exampleInputEmail1">category</label>
    <input type="text" name="category" placeholder="category name"  class="form-control" id="exampleInputEmail1">
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Add">