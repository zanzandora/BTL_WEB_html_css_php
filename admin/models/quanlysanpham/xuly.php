<?php
include('../../config/config.php');
    $masanpham = $_POST['masanpham'];
    $tensanpham = $_POST['tensanpham'];
    $nhasanxuat = $_POST['nhasanxuat'];
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $khoiluong = $_POST['khoiluong'];
    $dungtich = $_POST['dungtich'];
    $dongco = $_POST['dongco'];
    $congsuat = $_POST['congsuat'];
    $momen = $_POST['momen'];
    $gia = $_POST['gia'];
    $trangthai = $_POST['trangthai'];
    $danhmuc = $_POST['danhmuc'];

    if(isset($_POST['themsanpham'])){
        $sql_them = "insert into sanpham(masanpham,tensanpham,nhasanxuat,hinhanh,khoiluong,dungtich,dongco,congsuat,momen,gia,trangthai,iddanhmuc) value 
        ('".$masanpham."','".$tensanpham."','".$nhasanxuat."','".$hinhanh."','".$khoiluong."','".$dungtich."','".$dongco."','".$congsuat."','".$momen."','".$gia."','".$trangthai."','".$danhmuc."')";
        mysqli_query($connect,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('location:../../index.php?action=quanlysanpham&query=them');
    }elseif(isset($_POST['suasanpham'])){
        $id = $_GET['id'];
        if($hinhanh != ''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_sua = "update sanpham set masanpham = '".$masanpham."', tensanpham = '".$tensanpham."',nhasanxuat = '".$nhasanxuat."',hinhanh = '".$hinhanh."' 
            , khoiluong = '".$khoiluong."', dungtich = '".$dungtich."', dongco = '".$dongco."', congsuat = '".$congsuat."', momen = '".$momen."', gia = '".$gia."'
            , trangthai = '".$trangthai."', iddanhmuc = '".$danhmuc."' where id = '".$id."' ";
            $sql_del_img = "select * from sanpham where id = '".$id."' limit 1";
            $query = mysqli_query($connect,$sql_del_img);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_sua = "update sanpham set masanpham = '".$masanpham."', tensanpham = '".$tensanpham."',nhasanxuat = '".$nhasanxuat."' 
            , khoiluong = '".$khoiluong."', dungtich = '".$dungtich."', dongco = '".$dongco."', congsuat = '".$congsuat."', momen = '".$momen."', gia = '".$gia."'
            , trangthai = '".$trangthai."', iddanhmuc = '".$danhmuc."' where id = '".$id."' ";
        }
        mysqli_query($connect,$sql_sua);
        header('location:../../index.php?action=quanlysanpham&query=them');
    }else{
        $id = $_GET['id'];
        $sql_del_img = "select * from sanpham where id = '".$id."' limit 1";
        $query = mysqli_query($connect,$sql_del_img);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "delete from sanpham where id = '".$id."'";
        mysqli_query($connect,$sql_xoa);
        header('location:../../index.php?action=quanlysanpham&query=them');
    }
?>