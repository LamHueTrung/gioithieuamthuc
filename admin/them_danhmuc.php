<?php
    include("header.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ form
  $ten = $_POST["tendanhmuc"];
  $moTa = $_POST["mota"];

  // Thêm dữ liệu vào bảng 
  $sql = "INSERT INTO tbldanhmuc (tendanhmuc, mota) VALUES ('$ten', '$moTa')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Thêm danh mục thành công');</script>";

      // Chuyển hướng về trang danhsach.php sau khi thêm thành công
      echo "<script>window.location = '$port/CSN/admin/danhsach_danhmuc.php';</script>";
  } else {
      echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}
?>
<div class="row justify-content-center align-items-center ml-10 w-75">
        <div class="col-md-12">
            <h2 style="text-align:center">Thêm danh mục</h2>
            <form method="POST" class="was-validated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ten_monan">Tên địa điểm:</label>
                <input type="text" class="form-control" id="tendanhmuc" placeholder="Tên danh mục" name="tendanhmuc" required>
            
              </div>
        
              <div class="form-group">
                <label for="mota">Mô tả :</label>
                <textarea  type="text" class="form-control" id="mota" placeholder="Mô tả" name="mota" required></textarea >
              </div>
              <button type="submit" class="btn btn-success">Thêm danh mục</button>
            </form>
        </div>
</div>
