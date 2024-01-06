<?php
    include("header.php");
?>

<?php
// Kiểm tra xem có tham số id truyền vào từ URL hay không
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Truy vấn dữ liệu với ID đã nhận được
  $sql = "SELECT * FROM tbldanhmuc WHERE id_danhmuc = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Lấy dữ liệu từ bảng và hiển thị form để cập nhật
      $row = $result->fetch_assoc();
      $tendanhmuc = $row['tendanhmuc'];
      $mota = $row['mota'];
  } else {
      echo "Không tìm thấy dữ liệu với ID đã cho.";
  }
} else {
  echo "Không có ID được cung cấp.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ form
  $id = $_GET['id'];
  $tendanhmuc = $_POST["tendanhmuc"];
  $moTa = $_POST["mota"];

  // Cập nhật dữ liệu vào bảng tblMonAn
  $sql = "UPDATE tbldanhmuc SET tendanhmuc='$tendanhmuc', mota='$moTa' WHERE id_danhmuc=$id";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('cập nhật danh mục thành công');</script>";


      // Sau khi cập nhật, chuyển hướng về trang danh sách
      echo "<script>window.location = '$port/CSN/admin/danhsach_danhmuc.php';</script>";
  } else {
      echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }
}
// Đóng kết nối
$conn->close();
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="container mt-5">
            <h2 style="text-align:center">Cập nhật danh mục</h2>
            <form aaction="danhsach_danhmuc.php" method="POST" class="was-validated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="tendanhmuc">Tên địa điểm:</label>
                <input type="text" class="form-control" id="tendanhmuc" placeholder="Tên danh mục" name="tendanhmuc" value="<?php echo $tendanhmuc; ?>" required >
              </div>
             
              <div class="form-group">
                <label for="mota">Mô tả :</label>
                <textarea  type="text" class="form-control" id="mota" placeholder="Mô tả " name="mota" required><?php echo $mota; ?></textarea >
            
              </div>
              
              <button type="submit" class="btn btn-success">Cập nhật</button>
            </form>
        
     </div>
</main>

