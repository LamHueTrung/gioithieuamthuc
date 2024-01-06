<?php 
    if(isset($_GET['quanly'])){
        $tam=$_GET['quanly'];
    }else{
        $tam='';
    }
    if($tam == 'monan'){
        require_once 'main/monan.php';
    }elseif($tam == 'diadiem'){
        require_once 'main/diadiem.php';
    }elseif($tam == 'meobep'){
        require_once 'main/meobep.php';
    }elseif($tam == 'danhmuc'){
        require_once 'main/danhmuc.php';
    }elseif($tam == 'chitietmonan'){
        require_once 'main/chitietmonan.php';
    }elseif($tam == 'chitietdiadiem'){
        require_once 'main/chitietdiadiem.php';
    }else{
        require_once 'main/index.php';
    }
?>