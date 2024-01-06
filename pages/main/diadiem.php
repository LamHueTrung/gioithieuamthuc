<div class="container-fluid bg-3 text-center">    
            <h3><b style="font-family:  book antiqua, palatino, serif; magin-top">CÁC ĐỊA ĐIỂM ĂN UỐNG NỔI BẬT</b></h3>
            <br>
                <div class="row">
                            
                <?php
                   $sql2 = "SELECT * FROM tbldiadiem";
                   $conn2 = new mysqli("localhost", "root", "", "db_daiphu");
                   $result2 = $conn2->query($sql2);
                   while($row = $result2->fetch_assoc()){
                ?>
<div class="product d-inline-flex p-2 col-md-3">
       <div class="card mr-4 ml-4" >
           <img src=" ./hinhanh/<?php echo $row['hinhanh']; ?>" class="img-responsive" style="width:260px ;height: 170px;" alt="Image">                                  
           <div class="card-body">
               <h5 class="card-title"><?php echo $row["tendiadiem"] ?></h5>
               <a href="?quanly=chitietdiadiem&id=<?php echo $row['id']?>" class="btn btn-primary">Xem ngay</a>
          </div>
       </div>
</div>
<?php  }?>
                            
                            
                </div>
        </div>
