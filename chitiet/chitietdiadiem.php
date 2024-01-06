<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <link href="https://scontent.iocvnpt.com/resources/portal/Images/CTO/superadminportal.cto/Logo/logo_636971561338402893.png" rel="Shortcut Icon"> -->
    <link rel="stylesheet" href="./public//assets/css/boostrap.css">
    <link rel="stylesheet" href="./public//assets/css/main.css">
    <link rel="stylesheet" href="./public//assets/css/style.css">
    <link rel="stylesheet" href="./public//assets/css/loading.css">
    <title>ẨM THỰC VIỆT NAM</title>
</head>

<?php 
    // Kết nối cơ sở dữ liệu
    include('../config/connect.php');
    ?>
    <?php
      $id = $_GET['id'];
      $sql = "SELECT * from tbldiadiem where id = $id";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);

    
    ?>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo $row['tendiadiem']?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img  width= 324px src="../hinhanh/<?php echo $row['hinhanh']?>" alt="Hình ảnh món ăn">
    </div>
    
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Thành phầnghtrfbgh</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <ul>
        <li><?php echo $row ['mota']?></li>
       </ul>
    </div>
  </div>

</body>
  </html>