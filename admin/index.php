<?php
    include("header.php");
?>

<!-- Main Content -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">TRANG CHỦ</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lượt truy cập</h5>
                    <p class="card-text">500</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Số lượng món ăn</h5>
                    <p class="card-text">
                    <?php
                    // Truy vấn dữ liệu từ bảng tblMonAn
                    $sql = "SELECT * FROM tblmonan";
                    $result = $conn->query($sql);
                    $count = 0;
                    while($row = $result->fetch_assoc()){
                        $count = $count + 1;
                    }
                    echo $count;
                    // Đóng kết nối
                    $conn->close();
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Số lượng địa điểm</h5>
                    <p class="card-text">6</p>
                </div>
            </div>
        </div>
    </div>
</main>


