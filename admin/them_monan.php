<?php
    include("header.php");
?>

<?php

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ form
  $tenMonAn = $_POST["tenmonan"];
  $nguyenLieu = $_POST["nguyenlieu"];
  $cachNau = $_POST["cachnau"];
  $mien = $_POST["mien"];
  $id_danhmuc = $_POST['id_danhmuc'];
  // Xử lý upload hình ảnh
  $hinhanh = $_FILES["hinhanh"]["name"];
  $hinhanh_temp = $_FILES["hinhanh"]["tmp_name"];
  $hinhanh_path = "../hinhanh/" . $hinhanh; // Thư mục để lưu hình ảnh

  move_uploaded_file($hinhanh_temp, $hinhanh_path);

  // Thêm dữ liệu vào bảng tblMonAn
  $sql = "INSERT INTO tblMonAn (tenmonan, nguyenLieu, congthuc, hinhanh, vungmien, id_danhmuc) VALUES ('$tenMonAn', '$nguyenLieu', '$cachNau', '$hinhanh', '$mien','$id_danhmuc')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Thêm món ăn thành công');</script>";

      // Chuyển hướng về trang danhsach.php sau khi thêm thành công
      echo "<script>window.location = '$port/CSN/admin/danhsach_monan.php';</script>";
  } else {
      echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}
?>
<style>
  select {
    width: 100%;
    height: 40px;
  }
</style>
<div class="row justify-content-center align-items-center ml-5 w-75 mt-5">
        <div class="col-md-12">
       
            <h2 style="text-align:center">Thêm món ăn</h2>
            <form aaction="them.php" method="POST" class="was-validated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ten_monan">Tên món ăn:</label> 
                <input type="text" class="form-control" id="ten_monan" placeholder="Tên món ăn" name="tenmonan" required>
            
              </div>
              <div class="form-group">
                <label for="hinhanh">Hình ảnh:</label>
                <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh" required>
            
              </div>
              <div class="form-group">
                <label for="cachnau">Nguyên liệu :</label>
                <textarea  type="text" class="form-control" id="cachnau" placeholder="Nguyên liệu nấu " name="nguyenlieu" required></textarea >
            
              </div>
              <div class="form-group">
                <label for="cachnau">Cách nấu :</label>
                <textarea type="text" class="form-control" id="cachnau" placeholder="Cách nấu" name="cachnau" required></textarea >
            
              </div>
              <div class="form-group">
                <label for="cachnau">Miền :</label>
                <select class='mien' name="mien" id="">
                  <option value="Miền Bắc">Miền Bắc</option>
                  <option value="Miền Trung">Miền Trung</option>
                  <option value="Miền Nam">Miền Nam</option>
                </select>
            
              </div>
              <div class="form-group">
                <label for="cachnau">Danh mục : </label>
                <select class='mien' name="id_danhmuc" id="id_danhmuc">
                  <?php
                  $sql = "SELECT * FROM tbldanhmuc";
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()){ ?>
                  ?>
                  <option value="<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></option>
                  <?php } ?>
                </select>
            
              </div>
              <button type="submit" class="btn btn-success">Thêm món ăn</button>
            </form>
        
    </div>
</div>

