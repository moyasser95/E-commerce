
<div class=" <?php 
if(isset($_GET['error'])){
    echo "alert alert-danger";
}
?>">
<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}

?>
</div>

<?php
$id= filter_var($_GET['user_id'],FILTER_SANITIZE_NUMBER_INT);

$select_user= $connect ->query("SELECT * FROM user WHERE id='$id'");

$select_details = $select_user -> fetch_assoc();

?>

<form method="post" action="functions/user_update_mysql.php" style="width: 90%;margin:auto;">
  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo$select_details['id']?>">
    
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1" value="<?php echo$select_details['name']?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" placeholder="email" class="form-control" id="exampleInputEmail1" value="<?php echo$select_details['email']?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">gender</label>
    <select name="gender" class="form-control" id="exampleFormControlSelect1">
      <option value="0" <?php if($select_details['gender']){echo "selected";}?>>Male</option>
      <option value="1" <?php if($select_details['gender']){echo "selected";}?>>Female</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">privileges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">

  <?php $select_user_mysql=$connect ->query("SELECT * FROM user WHERE id='$id'");
   $user_detail=$select_user_mysql -> fetch_assoc();
   ?>
    <option value="<?php echo$user_detail['priv']?>">
    <?php 
    if($user_detail['priv']==300){
      echo "Owner";
    }elseif($user_detail['priv']==200){
      echo "admin";
    }else{
      echo "supervisor";
    }
      ?></option>  

      <?php
      $select_user_admin=$connect ->query("SELECT * FROM administrator");
      foreach ($select_user_admin as $value) {
      ?>
      <option value="<?php echo$value['number']?>"><?php echo$value['name']?></option>  
    <?php }?>


    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Update">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>