<?php
$sql_monan="SELECT * FROM tblmonan WHERE tblmonan.id_danhmuc='$_GET[id]' ORDER BY id_monan DESC";
$result = $conn->query($sql_monan);

$sql_danhmuc = "SELECT * FROM tbldanhmuc WHERE tbldanhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_danhmuc = mysqli_query($conn,$sql_danhmuc);
$row_title = mysqli_fetch_array($query_danhmuc);
?>
<h3 class="mt-5" style="text-align: center;">Món ăn tại <?php echo $row_title['tendanhmuc'];?></h3>
<div class="row">
    <?php
                while($row_monan = $result->fetch_assoc()){  ?>
            <div class="product d-inline-flex p-2 col-md-3">
                <div class="card mr-4 ml-4" style="width: 18rem;">
                    <img src=" ./hinhanh/<?php echo $row_monan['hinhanh']?>" class="img-responsive" style="width: 100%; height: 240px;" alt="Image">                                  
                    <div class="card-body" style ='min-height: 140px; height: 140px;'>
                        <h5 class="card-title h-50"><?php echo $row_monan["tenmonan"] ?></h5>
                        <a href="?quanly=chitietmonan&id=<?php echo $row_monan['id_monan']?> " class="btn btn-primary">Xem ngay</a>
                    </div>
                </div>
            </div>
    <?php } ?>
</div>
<div class="row">

    
    
</div>