<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
    include 'header.php';
    // include 'workspace.php';
?>
<div class="order-list">
  <div class="order-wall d-flex justify-content-center">
    <div class="order-card head-wall d-flex justify-content-center">
      <h1 class="display-5 text-center">ID</h1>
      <h1 class="display-5">Client Name</h1>
      <h1 class="display-5">Email</h1>
      <h1 class="display-5">Order</h1>
      <h1 class="display-5">Status</h1>
    </div>
  </div>

  <?php 
    include '../includes/config.php';
    $select = "SELECT * FROM order_list";
    $result = $conn->query($select) or die($conn->error);
// if($result->num_rows > 0){
  while($row = $result-> fetch_assoc()){
?>


  <div class="order-wall d-flex justify-content-center">
    <div class="order-card body-wall d-flex justify-content-center">
      <h1 class="display-5 text-center"><?php echo $row['client_id'] ?></h1>
      <h1 class="display-5"><?php echo $row['client_name'] ?></h1>
      <h1 class="display-5"><?php echo $row['client_email'] ?></h1>
      <h1 class="display-5"><?php echo $row['client_order'] ?></h1>
      <h1 class="display-5"><?php echo $row['client_status'] ?></h1>
      <button name="checked" class="btn admin-btn text-center">&#10003</button>
      <button name="edit" class="btn admin-btn text-center"><i class="fas fa-wrench"></i></button>
    </div>
  </div>
    



  <?php  }
      $conn->close();
      ?>
</div>




  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>