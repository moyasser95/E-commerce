<?php
$active="message";
include "design/navbar.php";
include "design/sidebar.php";
?>

<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Message Page</li>
  </ol>

  <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0"  style="border-radius:10px; margin-top:20px;">
  <thead style="background-color:#79776699;">
        <tr>
            <th style=" border-radius:10px">ID</th>
            <th style=" border-radius:10px">Name</th>
            <th style=" border-radius:10px">subject</th>
            <th style=" border-radius:10px">email</th>
            <th style=" border-radius:10px">phone</th>
            <th style=" border-radius:10px">message</th>
            <th style="border-radius:10px">status</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $select_message=$connect ->query("SELECT * FROM send_message");
        $counter=0;
        foreach ($select_message as $row_user){       
        ?>
        <tr>
            <td style="background-color:#7988"><?php echo++$counter?></td>
            <td><?php echo$row_user['name']?></td>
            <td style="background-color:#7988"><?php echo$row_user['subject']?></td>
            <td><?php echo$row_user['email']?></td>
            <td style="background-color:#7988"><?php echo$row_user['phone']?></td>
            <td style="background-color:#7988"><?php echo$row_user['message']?></td>
            <td><?php if($row_user['status']==0){echo"Unread";}else{echo"Read";}?></td>
        </tr>
        <?php }?>
    </tbody>


<?php
include "design/footer.php";
?>