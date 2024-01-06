<?php
    include("header.php");
?>
<?php
// Kết nối CSDL
include('../connect.php');

// Kiểm tra xem có tham số id truyền vào từ URL hay không
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lấy đường dẫn hình ảnh từ CSDL
    $sqlSelect = "SELECT hinhanh FROM tblmonan WHERE id_monan = $id";
    $resultSelect = $conn->query($sqlSelect);
    $row = $resultSelect->fetch_assoc();
    $hinhanhPath = $row['hinhanh'];

     // Xóa file hình ảnh từ hệ thống tệp
    if (file_exists($hinhanhPath)) {
        unlink($hinhanhPath);
    }

    // Thực hiện câu truy vấn DELETE để xóa món ăn
    $sql = "DELETE FROM tblmonan WHERE id_monan = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Xóa món ăn thành công');</script>";

        // Chuyển hướng về trang danh sách sau khi xóa
        echo "<script>window.location = '$port/CSN/admin/danhsach_monan.php';</script>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Không có ID được cung cấp.";
}

