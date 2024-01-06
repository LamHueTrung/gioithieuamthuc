<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<?php

?>
<style>

  /* Remove the navbar's default margin-bottom and rounded borders */ 
.navbar {
    margin-bottom: 0;
    border-radius: 0;
  }
  
  /* Add a gray background color and some padding to the footer */
  footer {
    background-color: #f2f2f2;
    padding: 25px;
  }
  
.carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
    min-height:200px;
}

/* Hide the carousel text when the screen is less than 600 pixels wide */
@media (max-width: 600px) {
  .carousel-caption {
    display: none; 
  }
}

/*   main  */
.content {
  height: 600px;
  width: 100%;
  display: flex;
}
.noi_bat {
width: 100%;
}

label {
  color: #b53209;
  font-size: 20px;
  margin-left: 15px;
}
.danh_sach_noi_bat li {
display: block;
  margin-bottom: 10px;
  margin-top: 10px;
}
.list_tin_tong_hop li {
  display: flex;
  margin-bottom: 10px;
  margin-top: 10px;
}
.list_tin_tong_hop li img {
  width: 115px;
  height: 80px;
  display: block;
  margin-right: 10px;
}
.danh_sach_noi_bat li img {
  width: 200px;
  height: 113px;
  display: block;
  margin-right: 10px;
}
.noi_bat_nhat {
display: flex;
margin-bottom: 30px;
  margin-left: 15px;
  margin-right: 15px;
}
.noi_bat_nhat img {
width: 50%;
margin-right: 15px;
}
.noi_bat_nhat desc {
width: 50%;
}
.ten {
font-size: 33px;
color: #b53209;
}
.mo_ta {
font-size: 20px;
overflow: hidden;
height: 50px;
-webkit-line-clamp: 3;
  line-height: 1.3;
}
.danh_sach_noi_bat ul {
display: flex;
}
.navbar{
  position: fixed;
  z-index: 1000;
  width: 100%;
 
}
.navbar-nav{
  text-align: center;
}

</style>
<body>
<div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <img src=" ./hinhanh/hi5.png" style="height: 65px; width :65pxs;" ></img>
<b style="font-family:  Lucida Bright;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
    </li>
         <?php
        $sql = "SELECT * FROM tbldanhmuc";
        $result = $conn->query($sql);
        
         ?>
         <div class="dropdown">
                <button type="button" class="btn btn-dark text-white-50 dropdown-toggle" data-toggle="dropdown">MÓN ĂN</button>
                <div id="id" class="dropdown-menu" >
                <?php
               while($row = $result->fetch_assoc()){ ?>
                        <a style="text-align: center;" class="dropdown-item" href="index.php?quanly=danhmuc&id=<?php echo $row['id_danhmuc'] ?>"> <?php echo $row ['tendanhmuc']  ?></a>
                <?php } ?>
                </div>
         </div>
      <li class="nav-item">
        <a class="nav-link" href="index.php?quanly=diadiem">ĐỊA ĐIỂM NỔI BẬT</a>
    
       </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?quanly=meobep">MẸO BẾP</a>
      </li>
    </ul>
  </b>
  </div>  

  <button onclick="window.location.href='../login/login.php'" style="height: 50px;margin-top: 4px;" class="btn btn-sm btn-dark text-whi"> Đăng nhập</button>
      
    </div>
  </div>
</nav>

</div>
<div class="item active" style="margin:0%;">
  <img src="./hinhanh/hi7.png" alt="Girl in a jacket" style="height: 400px; width :100%; margin-top:70px;">
  <div class="carousel-caption">
  </div>      
</div>