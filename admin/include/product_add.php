
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

<form method="post" action="functions/product_add_mysql.php" style="width: 90%;margin:auto;" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="number" name="price" placeholder="Price" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="number" name="sale" class="form-control" id="exampleInputEmail1" placeholder="sale">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">count</label>
    <input type="number" name="count" class="form-control" id="exampleInputEmail1" placeholder="count">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image[]" multiple class="form-control" id="exampleInputEmail1" placeholder="number">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Catageory</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
    <option hidden>Choose</option>
      <?php
      $select_product=$connect ->query("SELECT * FROM cataegory");
      foreach ($select_product as $row_product) {
      ?>
      <option value="<?php echo$row_product['name']?>"><?php echo$row_product['name']?></option>
<?php }?>      
    </select>
  </div>    

  <input type="submit" name="submit" class="btn btn-primary" value="Add">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>