<?php
$active="category";
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
    <li class="breadcrumb-item active">Category &nbsp;<?php if(isset($_GET['page'])=='add'){
     echo"/ عرض الفئات";
    }?>
      </li>
  </ol>


  <a href="?page=add" class="btn btn-secondary" style="border-radius:10px">Add New Category</a>
  <br>
  <br>
<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0"  style="border-radius:10px; margin-top:20px;">
    <thead>

        <tr>

            <th>ID</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
    </thead>
<?php
    $select_cataegory =$connect->query("SELECT * FROM cataegory");
    $id=0;
    foreach ($select_cataegory as $row_category){
        
?>
    <tbody>
        <tr>
            <td><?php echo++$id?></td>
            <td><?php echo$row_category['name']?></td>
            <th>
                <a href="delete_category.php?id_category=<?php echo$row_category['id']?>" class="btn btn-danger">Delete</a>
                <a href="?page=edit&id_category=<?php echo$row_category['id']?>" class="btn btn-success">Update</a>
            </th>

        </tr>
        <?php }?>
    </tbody>
</table>

<?php
include "design/footer.php";

?>

  
<?php
if (!isset($_GET['page'])){
}elseif ($_GET['page']=='add') {
    include "include/add_category.php";
}elseif ($_GET['page']=='edit'){
    include "include/category_edit.php";
}
?>
