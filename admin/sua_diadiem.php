<?php
    include("header.php");
?>
<?php

    
// Kiểm tra xem có tham số id truyền vào từ URL hay không
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Truy vấn dữ liệu với ID đã nhận được
  $sql = "SELECT * FROM tbldiadiem WHERE id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Lấy dữ liệu từ bảng và hiển thị form để cập nhật
      $row = $result->fetch_assoc();
      $tenDiaDiem = $row['tendiadiem'];
      $hinhanh = $row['hinhanh'];
      $moTa = $row['mota'];
      $diaChi = $row["diachi"];
      $gioPhucVu = $row["giophucvu"];
      $SoDienThoai = $row["sodienthoai"];
      $diaDiem = $row["id_danhmuc"];
  } else {
      echo "Không tìm thấy dữ liệu với ID đã cho.";
  }
} else {
  echo "Không có ID được cung cấp.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ form
  $id = $_GET['id'];
  $tenDiaDiem = $_POST["tendiadiem"];
  $moTa = $_POST["mota"];
  $diaChi = $_POST["diachi"];
  $gioPhucVu = $_POST["giophucvu"];
  $SoDienThoai = $_POST["sodienthoai"];
  $diaDiem = $_POST["id_danhmuc"];

  // Kiểm tra xem người dùng đã chọn hình ảnh mới hay không
  if ($_FILES["hinhanh"]["error"] == 0) {
    // Nếu có chọn hình mới, thực hiện xử lý upload
    $hinhanh = $_FILES["hinhanh"]["name"];
    $hinhanh_temp = $_FILES["hinhanh"]["tmp_name"];
    $hinhanh_path = "../hinhanh/" . $hinhanh;
    $hinhanh = $hinhanh;
    move_uploaded_file($hinhanh_temp, $hinhanh_path);
  } else {
      // Nếu không có chọn hình mới, giữ nguyên hình ảnh cũ
      $hinhanh = $hinhanh;
  }
  // Cập nhật dữ liệu vào bảng tblMonAn
  $sql = "UPDATE tbldiadiem SET tendiadiem='$tenDiaDiem', mota='$moTa', hinhanh='$hinhanh', id_danhmuc = '$diaDiem', diachi = '$diaChi', giophucvu = '$gioPhucVu', sodienthoai = '$SoDienThoai'  WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('cập nhật địa điểm thành công');</script>";


      // Sau khi cập nhật, chuyển hướng về trang danh sách
      echo "<script>window.location = '$port/CSN/admin/danhsach_diadiem.php';</script>";
  } else {
      echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container mt-5">
            <h2 style="text-align:center">Cập nhật địa điểm</h2>
            <form aaction="them.php" method="POST" class="was-validated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ten_monan">Tên địa điểm:</label>
                <input type="text" class="form-control" id="tendiadiem" placeholder="Tên địa điểm" name="tendiadiem" value="<?php echo $tenDiaDiem; ?>" required >
              </div>
              <div class="form-group">
                <label for="cachnau">Danh mục : </label>
                <select class='mien w-100' style = 'height: 40px;'  name="id_danhmuc" id="id_danhmuc">
                  <?php
                  $sql_danhmuc = "SELECT * FROM tbldanhmuc";
                  $result_danhmuc = $conn->query($sql_danhmuc);
                  while($row2 = $result_danhmuc->fetch_assoc()){ 
                    if($row2['id_danhmuc'] == $diaDiem) {
                    ?>
                  <option value="<?php echo $row2['id_danhmuc']?>" selected><?php echo $row2['tendanhmuc']?></option>
                  <?php }
                else { ?>
                  <option value="<?php echo $row2['id_danhmuc']?>"><?php echo $row2['tendanhmuc']?></option>
                <?php }} ?>
                </select>
              </div>
              <div class="form-group">
                <label for="hinhanh">Hình ảnh:</label>
                <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh" value= '<?php echo $hinhanh; ?>'>
                <img class='hinhanhmonan w-50 mt-4' style = 'height: 300px' src="../hinhanh/<?php echo $hinhanh; ?>" value= '<?php echo $hinhanh; ?>' name="hinhanh">
            
              </div>
              <div class="form-group">
                <label for="ten_monan">Địa chỉ:</label>
                <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ" name="diachi" required value= '<?php echo $diaChi; ?>'>
              </div>
              <div class="form-group">
                <label for="ten_monan">Giờ Phục vụ:</label>
                <input type="time" class="form-control" id="giophucvu" placeholder="Giờ phục vụ" name="giophucvu" value= '<?php echo $gioPhucVu; ?>' required>
              </div>
              <div class="form-group">
                <label for="ten_monan">Số điện thoại:</label>
                <input type="number" class="form-control" id="sodienthoai" placeholder="Số điện thoại" name="sodienthoai" value= '<?php echo $SoDienThoai; ?>' required>
              </div>
              <div class="form-group">
                <label for="mota">Mô tả :</label>
                <textarea  type="text" class="form-control" id="mota" placeholder="Mô tả " name="mota" required><?php echo $moTa; ?></textarea >
            
              </div>
              
              <button type="submit" class="btn btn-success">Cập nhật</button>
            </form>
        </div>
    </div>
</div>


