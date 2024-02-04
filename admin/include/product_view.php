<style>
        body{
        background-color:#7977;
        }
        </style>

<a href="?page=add" class="btn btn-primary" style="margin-bottom: 20px; border-radius:15px;">إضافة منتج</a>

<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Products Data Table</div>
          <div class="card-body">
            <div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0"  style="border-radius:10px; margin-top:20px;">

<!-- <table class="table table-bordered table-hover table-striped" id="dataTable" style="border-radius:10px; background-color:#fff"> -->
    <thead style="background-color:#79776699;">
        <tr>
            <th style=" border-radius:10px">ID</th>
            <th style=" border-radius:10px">Name</th>
            <th style=" border-radius:10px">Price</th>
            <!-- <th style=" border-radius:10px">Password</th> -->
            <th style=" border-radius:10px">Sale</th>
            <th style=" border-radius:10px">Count</th>
            <th style=" border-radius:10px">Image</th>
            <th style=" border-radius:10px">Cartegory</th>
            <th style="border-radius:10px">حذف/تعديل</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $select_user=$connect ->query("SELECT * FROM product");
        $id=0;
        foreach ($select_user as $row_product){       
        ?>
        <tr>
          
            <td style="background-color:#7988"><?php echo++$id?></td>
            <td><?php echo$row_product['name']?></td>
            <td style="background-color:#7988"><?php echo$row_product['price']?></td>
            <td><?php echo$row_product['sale']?></td>
            <td style="background-color:#7988"><?php echo$row_product['count']?></td>
            <td><img src="images/<?php echo$row_product['image']?>" style="width:80px; border-radius:10px"></td>
            <td style="background-color:#7988"><?php echo$row_product['category']?></td>
            <td>
              <!-- Button trigger modal -->

              
<?php
$priv=$_SESSION['login_validate']['priv'];
if($priv==100){
?>
              <button type="button" class="btn btn-danger" disabled data-toggle="modal" data-target="#exampleModal<?php echo$row_product['id']?>">
                حذف
              </button>
<?php
 }else{
  ?>
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_product['id']?>">
                حذف
              </button>
 <?php }?>


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$row_product['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">حذف منتج</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        هل تريد بالتأكيد حذف ؟ <span class="text-danger"><?php echo$row_product['name']?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
        <a href="functions/delete_product.php?product_id=<?php echo$row_product['id']?>" class="btn btn-danger">تأكيد</a>
      </div>
    </div>
  </div>
</div>

<?php
$priv=$_SESSION['login_validate']['priv'];
if($priv==100){
?>
<a href="?page=edit&product_id=<?php echo$row_product['id']?>" class="btn btn-success disabled">تعديل</a>
<?php 
}else{
  ?>

  <a href="?page=edit&product_id=<?php echo$row_product['id']?>" class="btn btn-success">تعديل</a>
  <?php }?>       
</td>
</tr>
<?php }?>
</tbody>
</table>

</div>
</div>
</div>