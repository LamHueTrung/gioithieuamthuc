<style>
    .img1 {
    width: 350px;
}
</style>
    <?php
      $id = $_GET['id'];
      $sql = "SELECT * from tblmonan where id_monan = $id";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      $id_danh_muc = (int)$row['id_danhmuc'];
      $sql_danhmuc = "SELECT * from tbldanhmuc where id_danhmuc = $id_danh_muc";
      $query2 = mysqli_query($conn, $sql_danhmuc);
      $row2 = mysqli_fetch_assoc($query2);
    ?>
   
 <style>
  .list-recipe.active {
    height: auto;
  }
  body {
    background: #f3f3f3;
  }
  .list-recipe {
    display: block;
    overflow: hidden;
    background: #edf5ff;
    margin: 10px 15px 20px;
    border: 1px solid #0088f2;
    border-radius: 4px;
    background: #f3f3f3;
    height: 40px;
  }
  .list-recipe span {
      display: block;
      overflow: hidden;
      font-weight: 600;
      padding: 7px 10px;
      position: relative;
  }
  .list-recipe ul {
      display: block;
      overflow: hidden;
  }
  .list-recipe ul li {
      display: block;
      overflow: hidden;
  }
  textarea.no-resize {
    resize: none;
    overflow: hidden;
    height: auto;
    border: none;
  }
  .detail-danhmuc {
      float: right;
      width: 33%;
      background: #f3f3f3;
  }
  .detail-danhmuc ul {
      display: block;
      overflow: hidden;
      padding: 10px 20px;
      border-radius: 8px;
      margin-bottom: 10px;
      background: #fff;
      list-style: none;
  }
  .detail-danhmuc ul li {
      display: block;
      overflow: hidden;
  }
  .detail-danhmuc ul li.active a {
      font-weight: 600;
      color: #4a90e2;
  }
  .detail-danhmuc li a {
      display: block;
      overflow: hidden;
      padding: 12px 0;
      border-bottom: 1px solid #ddd;
      font-size: 16px;
      color: #333;
      line-height: 24px;
  }
 </style>   
<body>
<div class="container">
    <h5 class = 'mt-4 text-primary'><?php echo $row2['tendanhmuc']?> ><?php echo $row['tenmonan']?></h5>
  <div class="row mt-4 mb-4 w-100 bg-white d-flex">
    <div class="col-md-8 w-100">
      <img class="img1 w-100" src="./hinhanh/<?php echo $row['hinhanh']?>" alt="Hình ảnh món ăn">
      <h2 class = 'mt-4 text-center w-100'>Cách làm <?php echo $row['tenmonan']?></h2>
      <div class="list-recipe active">
        <div class="btn-recipe fastview">
            <span>Xem nhanh</span>
        </div>
        <ul>
          <li>
            <a href="#nguyenlailam">
              Chuẩn bị nguyên liệu
            </a>
          </li>
          <li>
            <a href="#cachchebien">
            Cách chế biến <?php echo $row['tenmonan']?>
            </a>
            </li>
        </ul>
      </div>
      <div class="col-md-9 w-100 ml-3" id = "nguyenlieulam">
        <h4 class = 'mt-4 w-100'>Nguyên liệu làm <?php echo $row['tenmonan']?></h4>
        <?php 
        $nguyenlieu = $row['nguyenlieu'];
        $soDong = substr_count($nguyenlieu, "\n") + 1;
        ?>
        <textarea class ='w-100 no-resize'rows="<?php echo $soDong; ?>" readonly><?php echo $row['nguyenlieu']?></textarea>
      </div>
      <div class="col-md-9 w-100 ml-3" id = "cachchebien">
        <h4 class = 'mt-4 w-100'>Cách chế biến <?php echo $row['tenmonan']?></h4>
        <?php 
        $nguyenlieu = $row['congthuc'];
        $soDong = substr_count($nguyenlieu, "\n") + 6;
        ?>
        <textarea class ='w-100 no-resize'rows="<?php echo $soDong; ?>" readonly><?php echo $row['congthuc']?></textarea>
      </div>
    </div>
    <div class="detail-danhmuc col-md-4">
      <ul>
        <?php
        $sql_danhmuc = "SELECT * FROM tbldiadiem WHERE id_danhmuc = $id_danh_muc";
        $result_danhmuc = $conn->query($sql_danhmuc);
        while($row2 = $result_danhmuc->fetch_assoc()){ 
        ?>
                <li class=" ">
                    <a href="?quanly=chitietdiadiem&id=<?php echo $row2['id']?>">
                            <img  style ='width: 40%;' src="./hinhanh/<?php echo $row2['hinhanh']?>" alt="<?php echo $row2['tendiadiem']?>">
                        <?php echo $row2['tendiadiem']?>
                    </a>
                </li>
        <?php }?>        
        </ul>
    </div>

  </div>
</div>