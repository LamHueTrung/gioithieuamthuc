<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<?php
    // Kết nối cơ sở dữ liệu
    include('../connect.php');
?>
<body>
<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column mt-4">
                    <li class="nav-item">
                        <a class="nav-link active h4" href='index.php'>
                            <i class="fas fa-chart-bar"></i> DASHBOARD
                        </a>
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/admin/danhsach_monan.php">
                            <i class="fas fa-chart-bar"></i> DANH SÁCH MÓN ĂN
                        </a>
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/admin/them_monan.php">
                            <i class="fas fa-plus"></i> THÊM MÓN ĂN
                        </a>
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/admin/danhsach_diadiem.php">
                            <i class="fas fa-chart-bar"></i> DANH SÁCH ĐỊA ĐIỂM
                        </a>
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/admin/them_diadiem.php">
                            <i class="fas fa-plus"></i> THÊM ĐỊA ĐIỂM
                        </a>
                        
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/admin/danhsach_danhmuc.php">
                            <i class="fas fa-chart-bar"></i> DANH SÁCH DANH MỤC
                        </a>
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/admin/them_danhmuc.php">
                            <i class="fas fa-plus"></i> THÊM DANH MỤC
                        </a>
                        <a class="nav-link active h6" href="<?php echo $port ?>/CSN/">
                            <i class="fas fa-sign-out-alt"></i> TRANG NGƯỜI DÙNG
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
