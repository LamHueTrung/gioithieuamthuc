<?php
    include("header.php");
?>
<?php

    
// Kiểm tra xem có tham số id truyền vào từ URL hay không
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Truy vấn dữ liệu với ID đã nhận được
  $sql = "SELECT * FROM tblmonan WHERE id_monan = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Lấy dữ liệu từ bảng và hiển thị form để cập nhật
      $row = $result->fetch_assoc();
      $tenMonAn = $row['tenmonan'];
      $hinhanh = $row['hinhanh'];
      $nguyenLieu = $row['nguyenlieu'];
      $cachNau = $row['congthuc'];
      $mien = $row['vungmien'];

  } else {
      echo "Không tìm thấy dữ liệu với ID đã cho.";
  }
} else {
  echo "Không có ID được cung cấp.";
}

$selectedmienbac = "";
$selectedmiennam = "";
$selectedmientrung = "";
if($mien == "Miền Bắc") {
  $selectedmienbac = 'selected';
} else if($mien == "Miền Trung") {
  $selectedmientrung = 'selected';
} else {
  $selectedmiennam = 'selected';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ form
  $id = $_GET['id'];
  $tenMonAn = $_POST["tenmonan"];
  $nguyenLieu = $_POST["nguyenlieu"];
  $cachNau = $_POST["cachnau"];
  $mien = $_POST["mien"];
  $id_danhmuc = $_POST['id_danhmuc'];

  // Kiểm tra xem người dùng đã chọn hình ảnh mới hay không
  if ($_FILES["hinhanh"]["error"] == 0) {
    // Nếu có chọn hình mới, thực hiện xử lý upload
    $hinhanh = $_FILES["hinhanh"]["name"];
    $hinhanh_temp = $_FILES["hinhanh"]["tmp_name"];
    $hinhanh_path = "../hinhanh/" . $hinhanh;
    $hinhanh = $hinhanh_path;
    move_uploaded_file($hinhanh_temp, $hinhanh_path);
  } else {
      // Nếu không có chọn hình mới, giữ nguyên hình ảnh cũ
      $hinhanh = $hinhanh;
  }
  // Cập nhật dữ liệu vào bảng tblMonAn
  if(isset($_FILES["hinhanh"]["name"])&&!empty($_FILES["hinhanh"]["name"]))
    $sql = "UPDATE tblmonan SET tenmonan='$tenMonAn', nguyenlieu='$nguyenLieu', congthuc='$cachNau', hinhanh='".$_FILES["hinhanh"]["name"]."', vungmien = '$mien', id_danhmuc = '$id_danhmuc' WHERE id_monan=$id";
  else
    $sql = "UPDATE tblmonan SET tenmonan='$tenMonAn', nguyenlieu='$nguyenLieu', congthuc='$cachNau', vungmien = '$mien', id_danhmuc = '$id_danhmuc' WHERE id_monan=$id";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('cập nhật món ăn thành công');</script>";


      // Sau khi cập nhật, chuyển hướng về trang danh sách
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
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container mt-5">
            <h2 style="text-align:center">CẬP NHẬT MÓN ĂN</h2>
            <form aaction="them.php" method="POST" class="was-validated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ten_monan">Tên món ăn:</label>
                <input type="text" class="form-control" id="ten_monan" placeholder="Tên món ăn" name="tenmonan" value="<?php echo $tenMonAn; ?>" required >
              </div>
              <div class="form-group">
                <label for="cachnau">Miền :</label>
                
                <select class='mien' name="mien" id="" >
                  <option class='mienbac' value="Miền Bắc" <?php echo $selectedmienbac?>>Miền Bắc</option>
                  <option class='mientrung' value="Miền Trung"<?php echo $selectedmientrung?>>Miền Trung</option>
                  <option class='miennam' value="Miền Nam" <?php echo $selectedmiennam?>>Miền Nam </option>
                </select>
            
              </div>
              <div class="form-group">
                <label for="cachnau">Danh mục : </label>
                <select class='mien' name="id_danhmuc" id="id_danhmuc">
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
                <input type="file" class="form-control" id="hinhanh" placeholder="Chọn hình ảnh" name="hinhanh" value= '<?php echo $hinhanh; ?>'>
                <img class='hinhanhmonan w-50 mt-4' style = 'height: 300px' src="../hinhanh/<?php echo $hinhanh; ?>" value= '<?php echo $hinhanh; ?>' name="hinhanh">
            
              </div>
              <div class="form-group">
                <label for="cachnau">Nguyên liệu :</label>
                <textarea style= 'height: 200px'  type="text" class="form-control" id="cachnau" placeholder="Nguyên liệu nấu " name="nguyenlieu" required><?php echo $nguyenLieu; ?></textarea >
            
              </div>
              <div class="form-group">
                <label for="cachnau">Cách nấu :</label>
                <textarea style= 'height: 200px' type="text" class="form-control" id="cachnau" placeholder="Cách nấu" name="cachnau" required><?php echo $cachNau; ?></textarea >
            
              </div>
              
              <button type="submit" class="btn btn-success">Cập nhật</button>
            </form>
        </div>
    </div>
</div>