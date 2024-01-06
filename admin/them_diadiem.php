<?php
    include("header.php");
?>
<?php

    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ form
  $tenDiaDiem = $_POST["tendiadiem"];
  $moTa = $_POST["mota"];
  $diaChi = $_POST["diachi"];
  $gioPhucVu = $_POST["giophucvu"];
  $SoDienThoai = $_POST["sodienthoai"];
  $diaDiem = $_POST["id_danhmuc"];
  // Xử lý upload hình ảnh
  $hinhanh = $_FILES["hinhanh"]["name"];
  $hinhanh_temp = $_FILES["hinhanh"]["tmp_name"];
  $hinhanh_path = "../hinhanh/" . $hinhanh; // Thư mục để lưu hình ảnh

  move_uploaded_file($hinhanh_temp, $hinhanh_path);

  // Thêm dữ liệu vào bảng tbldiadiem
  $sql = "INSERT INTO tbldiadiem (tendiadiem, hinhanh, mota, id_danhmuc, diachi, giophucvu, sodienthoai) VALUES ('$tenDiaDiem', '$hinhanh' , '$moTa', $diaDiem, '$diaChi','$gioPhucVu', '$SoDienThoai')";
  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Thêm địa điểm thành công');</script>";

      // Chuyển hướng về trang danhsach.php sau khi thêm thành công
      echo "<script>window.location = '$port/CSN/admin/danhsach_diadiem.php';</script>";
  } else {
      echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}
?>

<div class="row justify-content-center align-items-center ml-5 w-75 mt-5">
        <div class="col-md-12">
       
            <h2 style="text-align:center">Thêm địa điểm</h2>
            <form aaction="them.php" method="POST" class="was-validated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ten_monan">Tên địa điểm:</label>
                <input type="text" class="form-control" id="tendiadiem" placeholder="Tên địa điểm" name="tendiadiem" required>
              </div>
              <div class="form-group">
                <label for="cachnau">Danh mục : </label>
                <select class='mien w-100' style = 'height: 40px;'  name="id_danhmuc" id="id_danhmuc">
                  <?php
                  $sql = "SELECT * FROM tbldanhmuc";
                  $result = $conn->query($sql);
                  while($row = $result->fetch_assoc()){ ?>
                  <option value="<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="hinhanh">Hình ảnh:</label>
                <input type="file" class="form-control" id="hinhanh" placeholder="Hình ảnh minh hoạ" name="hinhanh" required>
              </div>
              <div class="form-group">
                <label for="ten_monan">Địa chỉ:</label>
                <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ" name="diachi" required>
              </div>
              <div class="form-group">
                <label for="ten_monan">Giờ Phục vụ:</label>
                <input type="time" class="form-control" id="giophucvu" placeholder="Giờ phục vụ" name="giophucvu" required>
              </div>
              <div class="form-group">
                <label for="ten_monan">Số điện thoại:</label>
                <input type="number" class="form-control" id="sodienthoai" placeholder="Số điện thoại" name="sodienthoai" required>
              </div>
              <div class="form-group">
                <label for="cachnau">Mô tả :</label>
                <textarea  type="text" class="form-control" id="mota" placeholder="Mô tả" name="mota" required></textarea >
              </div>
              <button type="submit" class="btn btn-success">Thêm địa điểm</button>
            </form>
        </div>
    </div>
</div>


