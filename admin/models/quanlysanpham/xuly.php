<?php
define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');

require_once('../../../config/config.php');

$masanpham = $_POST['masanpham'];
$tensanpham = $_POST['tensanpham'];
$nhasanxuat = $_POST['nhasanxuat'];
$xuatxu = $_POST['xuatxu'];
$hinhanh = $_FILES['hinhanh']['name'];

// $hinhanh = time().'_'.$hinhanh;
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

// Kiểm tra nếu file đã tồn tại, thêm số thứ tự vào tên file để tránh ghi đè
$target_directory = 'uploads/';
$target_file = $target_directory . $hinhanh;
$file_extension = pathinfo($hinhanh, PATHINFO_EXTENSION);
$file_name = pathinfo($hinhanh, PATHINFO_FILENAME);
$counter = 1;

while (file_exists($target_file)) {
    $hinhanh = $file_name . '_' . $counter . '.' . $file_extension;
    $target_file = $target_directory . $hinhanh;
    $counter++;
}
$mau = $_POST['mau'];
$khoiluong = $_POST['khoiluong'];
$kichco = $_POST['kichco'];
$chatlieu = $_POST['chatlieu'];
$degiay = $_POST['degiay'];
$cao = $_POST['cao'];
$gia = $_POST['gia'];
$trangthai = $_POST['trangthai'];
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['themsanpham'])) {
    $sql_them = "insert into sanpham(masanpham, tensanpham, nhasanxuat, xuatsu, hinhanh, mau, khoiluong, kichco, chatlieu, degiay, cao, gia, trangthai, iddanhmuc) value 
        ('" . $masanpham . "', '" . $tensanpham . "', '" . $nhasanxuat . "', '" . $xuatxu . "', '" . $hinhanh . "', '" . $mau . "', '" . $khoiluong . "', '" . $kichco . "', '" . $chatlieu . "', '" . $degiay . "', '" . $cao . "', '" . $gia . "', '" . $trangthai . "', '" . $danhmuc . "')";
    mysqli_query($connect, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('location:../../index.php?action=quanlysanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    $id = $_GET['id'];
    if ($hinhanh != '') {

        $sql_del_img = "SELECT * FROM sanpham WHERE id = '" . $id . "' LIMIT 1";
        $query = mysqli_query($connect, $sql_del_img);
        $row = mysqli_fetch_array($query);
        if ($row && !empty($row['hinhanh'])) {
            unlink('uploads/' . $row['hinhanh']);
        }
        $sql_sua = "UPDATE sanpham SET 
                        masanpham = '" . $masanpham . "', 
                        tensanpham = '" . $tensanpham . "', 
                        nhasanxuat = '" . $nhasanxuat . "', 
                        xuatsu = '" . $xuatxu . "',
                        hinhanh = '" . $hinhanh . "', 
                        mau = '" . $mau . "',
                        khoiluong = '" . $khoiluong . "', 
                        kichco = '" . $kichco . "', 
                        chatlieu = '" . $chatlieu . "', 
                        degiay = '" . $degiay . "', 
                        cao = '" . $cao . "', 
                        gia = '" . $gia . "', 
                        trangthai = '" . $trangthai . "', 
                        iddanhmuc = '" . $danhmuc . "' 
                    WHERE id = '" . $id . "'";
    } else {
        $sql_sua = "UPDATE sanpham SET 
                        masanpham = '" . $masanpham . "', 
                        tensanpham = '" . $tensanpham . "', 
                        nhasanxuat = '" . $nhasanxuat . "', 
                        xuatsu = '" . $xuatxu. "',
                        mau = '" . $mau . "',
                        khoiluong = '" . $khoiluong . "', 
                        kichco = '" . $kichco . "', 
                        chatlieu = '" . $chatlieu . "', 
                        degiay = '" . $degiay . "', 
                        cao = '" . $cao . "', 
                        gia = '" . $gia . "', 
                        trangthai = '" . $trangthai . "', 
                        iddanhmuc = '" . $danhmuc . "' 
                    WHERE id = '" . $id . "'";
    }
    mysqli_query($connect, $sql_sua);
    header('location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['id'];
    $sql_del_img = "select * from sanpham where id = '" . $id . "' limit 1";
    $query = mysqli_query($connect, $sql_del_img);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "delete from sanpham where id = '" . $id . "'";
    mysqli_query($connect, query: $sql_xoa);
    header('location:' . BASE_URL . 'admin/index.php?action=quanlysanpham&query=them');
}
