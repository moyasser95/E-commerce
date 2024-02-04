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
$id=filter_var($_GET['product_id'],FILTER_SANITIZE_NUMBER_INT);
$select_product=$connect ->query("SELECT * FROM product WHERE id='$id'");
$product_details=$select_product ->fetch_assoc();
?>

<form method="post" action="functions/product_update_Mysql.php" style="width: 90%;margin:auto;" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo$product_details['id']?>">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" placeholder="name"  class="form-control" id="exampleInputEmail1" value="<?php echo$product_details['name']?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="number" name="price" placeholder="Price" class="form-control" id="exampleInputEmail1" value="<?php echo$product_details['price']?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="number" name="sale" class="form-control" id="exampleInputEmail1" placeholder="sale" value="<?php echo$product_details['sale']?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">count</label>
    <input type="number" name="count" class="form-control" id="exampleInputEmail1" placeholder="count" value="<?php echo$product_details['count']?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image[]" multiple class="form-control" id="exampleInputEmail1" placeholder="number">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Catageory</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">
    <!-- <option hidden>Choose</option> -->
    <?php 
    $select_product_mysql=$connect ->query("SELECT * FROM product WHERE id='$id'");
    $product_details_mysql =$select_product_mysql ->fetch_assoc();
    ?>
    <option value="<?php echo$product_details_mysql['category']?>"><?php echo$product_details['category']?></option>
    
      <?php
      $select_product=$connect ->query("SELECT * FROM cataegory");
      foreach ($select_product as $row_product){
      ?>
      <option value="<?php echo$row_product['name']?>"><?php echo$row_product['name']?></option>
<?php }?>      
    </select>
  </div>    

  <input type="submit" name="submit" class="btn btn-primary" value="Update Product">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<br>