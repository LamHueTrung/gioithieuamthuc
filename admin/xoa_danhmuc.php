<?php
    include("header.php");
?>
<?php
// Kết nối CSDL
include('../connect.php');

// Kiểm tra xem có tham số id truyền vào từ URL hay không
if (isset($_GET['id'])) {
    $id = $_GET['id'];


    // Thực hiện câu truy vấn DELETE để xóa danh mục
    $sql = "DELETE FROM tbldanhmuc WHERE id_danhmuc = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Xóa danh mục thành công');</script>";

        // Chuyển hướng về trang danh sách sau khi xóa
        echo "<script>window.location = '$port/CSN/admin/danhsach_danhmuc.php';</script>";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Không có ID được cung cấp.";
}


