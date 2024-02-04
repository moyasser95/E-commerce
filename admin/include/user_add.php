
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

<form method="post" action="functions/user_add_mysql.php" style="width: 90%;margin:auto;">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" placeholder="email" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">gender</label>
    <select name="gender" class="form-control" id="exampleFormControlSelect1">
      <option value="0">Male</option>
      <option value="1">Female</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">privileges</label>
    <select name="priv" class="form-control" id="exampleFormControlSelect1">
    <option hidden>Choose</option>
      <?php
      $select_user=$connect ->query("SELECT * FROM administrator");
      foreach ($select_user as $row_priv) {
      ?>
      <option value="<?php echo$row_priv['number']?>"><?php echo$row_priv['name']?></option>
<?php }?>      
    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>