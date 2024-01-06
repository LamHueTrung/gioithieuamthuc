<?php
    include_once("header.php");
?>
<!-- Main Content -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container mt-5">
            <div class="form-group">
                <div class="container-fluid">
                <h2 style="text-align: center;"> DANH SÁCH ĐỊA ĐIỂM</h2> 
                    <div class="card">
                        <div class="card-body" >
                            <table class="table" style="text-align: center;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th >ID</th>
                                        <th class='tendiadiem'>Tên Địa Điểm</th>
                                        <th class='hinhanhdiadiem'>Hình Ảnh</th>
                                        <th class='motadiadiem'>Mô tả</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Truy vấn dữ liệu từ bảng tblMonAn
                                    $sql = "SELECT * FROM tbldiadiem";
                                    $result = $conn->query($sql);
                                    $i = 1;
                                        while($row = $result->fetch_assoc()){ ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td class='tendiadiem'><?php echo $row['tendiadiem']; ?></td>
                                                <td class='hinhanhdiadiem'>
                                                    <img style ="width: 100px;" src="../hinhanh/<?php echo $row['hinhanh']; ?>">
                                                </td>   
                                                <td class='motadiadiem'><textarea name="" id="" cols="30" rows="10"><?php echo $row['mota']; ?></textarea> </td>
                                                <td>
                                                    <a href="<?php echo $port ?>/CSN/admin/sua_diadiem.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Sửa</a> 
                                                    <!-- JavaScript để xác nhận xóa -->
                                                        <script>
                                                            function HoiKhiDelete() {
                                                                return confirm("Bạn có chắc muốn xóa món ăn này?");
                                                            }
                                                        </script>
                                                    <a onclick="return Del('<?php echo $row['tendiadiem']; ?>')" onclick='HoiKhiDelete()' href="<?php echo $port ?>/CSN/admin/xoa_diadiem.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Xóa</a>
                                                </td>
                                            </tr> 
                                    <?php  }?>
                                </tbody>
                            </table>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS, Popper.js, and jQuery -->

