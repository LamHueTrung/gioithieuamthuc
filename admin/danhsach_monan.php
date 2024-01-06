<?php
    include("header.php");
   
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container mt-5">
  
    <div class="form-group">
        <div class="container-fluid">
        <h2 style="text-align: center;"> DANH SÁCH MÓN ĂN</h2> 
            <div class="card">
                <div class="card-body" >
                     <table class="table" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th >ID</th>
                                <th class='tenmonan'>Tên </th>
                                <th class='hinhanh'>Hình Ảnh</th>
                                <th class='cachnau'>Cách nấu</th>
                                <th class='nguyenlieu'>Nguyên Liệu</th>
                                <th class='tenmonan'>Miền</th>
                                <th ></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             // Truy vấn dữ liệu từ bảng tblMonAn
                            $sql = "SELECT * FROM tblmonan";
                            $result = $conn->query($sql);
                            $i = 1;
                                while($row = $result->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td class='tenmonan'><?php echo $row['tenmonan']; ?></td>
                                        <td class='hinhanh'>
                                            <img style ="width: 100px;" src="../hinhanh/<?php echo $row['hinhanh']; ?>">
                                        </td>   
                                        <td class='cachnau'> <textarea name="" id="" cols="30" rows="10"><?php echo $row['congthuc']; ?></textarea></td>
                                        <td class='nguyenlieu'> <textarea name="" id="" cols="30" rows="10"><?php echo $row['nguyenlieu']; ?></textarea></td>
                                        <td class='tenmonan'><?php echo $row['vungmien']; ?></td>
                                        <td>
                                            <a href="<?php echo $port ?>/CSN/admin/sua_monan.php?id=<?php echo $row['id_monan']; ?>" class="btn btn-info">Sửa</a> 
                                             <!-- JavaScript để xác nhận xóa -->
                                                <script>
                                                    function HoiKhiDelete() {
                                                        return confirm("Bạn có chắc muốn xóa món ăn này?");
                                                    }
                                                </script>
                                            <a onclick="return Del('<?php echo $row['tenmonan']; ?>')" onclick='HoiKhiDelete()' href="<?php echo $port ?>/CSN/admin/xoa_monan.php?id=<?php echo $row['id_monan']; ?>" class="btn btn-danger" >Xóa</a>
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
                                                </main>


