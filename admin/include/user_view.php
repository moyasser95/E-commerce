<style>
        body{
        background-color:#7977;
        }
        </style>

<a href="?page=add" class="btn btn-primary" style="margin-bottom: 20px; border-radius:15px;">إضافة مستخدم</a>

<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0"  style="border-radius:10px; margin-top:20px;">

<!-- <table class="table table-bordered table-hover table-striped" id="dataTable" style="border-radius:10px; background-color:#fff"> -->
    <thead style="background-color:#79776699;">
        <tr>
            <th style=" border-radius:10px">ID</th>
            <th style=" border-radius:10px">Name</th>
            <th style=" border-radius:10px">Email</th>
            <!-- <th style=" border-radius:10px">Password</th> -->
            <th style=" border-radius:10px">Gender</th>
            <th style=" border-radius:10px">Priv</th>
            <th style="border-radius:10px">حذف/تعديل</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $select_user=$connect ->query("SELECT * FROM user");
        $counter=0;
        foreach ($select_user as $row_user){       
        ?>
        <tr>
            <td style="background-color:#7988"><?php echo++$counter?></td>
            <td><?php echo$row_user['name']?></td>
            <td style="background-color:#7988"><?php echo$row_user['email']?></td>
            <!-- <td><?php echo$row_user['password']?></td> -->
            <td><?php if($row_user['gender']==0){echo"Male";}else{echo"Female";}?></td>
            <td style="background-color:#7988"><?php echo$row_user['priv']?></td>
            <td>
                <!-- Button trigger modal -->


<button 
<?php
if($row_user['priv']==100 or 
$priv_login==300 or 
$priv_login==200 and $id_login==$row_user['id']){
  echo"enabled  ";
}else{
  echo"disabled";
}
?>

type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_user['id']?>">
  حذف
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$row_user['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">حذف مستخدم</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        هل تريد بالتأكيد حذف ؟ <span class="text-danger"><?php echo$row_user['name']?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
        <a href="functions/delete_user.php?user_id=<?php echo$row_user['id']?>" class="btn btn-danger">تأكيد</a>
      </div>
    </div>
  </div>
</div>

<a href="?page=edit&user_id=<?php echo$row_user['id']?>" class="btn btn-success <?php
if($row_user['priv']==100 or 
$priv_login==300 or 
$priv_login==200 and $id_login==$row_user['id']){
  echo"enabled  ";
}else{
  echo"disabled";
}
?>
">تعديل</a>


        </td>
        </tr>
    <?php }?>
    </tbody>
</table>
