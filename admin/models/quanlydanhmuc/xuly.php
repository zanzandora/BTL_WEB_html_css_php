<?php
define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');
require_once('../../../config/config.php');
$loaisanpham = isset($_POST['tendanhmuc']) ? $_POST['tendanhmuc'] : '';
$thutu = isset($_POST['thutu']) ? $_POST['thutu'] : '';

if (isset($_POST['themdanhmuc'])) {
    $sql_them = "insert into danhmuc(ten,thutu) value ('" . $loaisanpham . "','" . $thutu . "')";
    $query_them = mysqli_query($connect, $sql_them);
    if (!$query_them) {
        die("Lỗi truy vấn: " . mysqli_error($connect));
    }
    header('Location: ../../../admin/index.php?action=quanlydanhmucsanpham&query=them');
    if ($query_them) {
        echo '<script>window.location.href = "index.php?action=quanlydanhmucsanpham&query=them";</script>';
    }
    exit();
} elseif (isset($_POST['suadanhmuc'])) {
    $id = $_GET['iddanhmuc'];
    $sql_sua = "update danhmuc set ten = '" . $loaisanpham . "', thutu = '" . $thutu . "' where iddanhmuc = '" . $id . "' ";
    $query_sua=mysqli_query($connect, $sql_sua);
    if (!$query_sua) {
        die("Lỗi truy vấn: " . mysqli_error($connect));
    }
    header('location:' . BASE_URL . 'admin/index.php?action=quanlydanhmucsanpham&query=them');
    exit();
} else {
    $id = $_GET['iddanhmuc'];

    $sql_kiemtra = "SELECT COUNT(*) AS count FROM sanpham WHERE iddanhmuc = '" . $id . "'";
    $result = mysqli_query($connect, $sql_kiemtra);
    $row = mysqli_fetch_assoc($result);

    if ($row['count'] > 0) {
        // Nếu có sản phẩm liên kết, hiển thị thông báo và không xóa
        echo "Không thể xóa danh mục này vì còn sản phẩm liên kết.";
    } else {
        // Tiến hành xóa danh mục
        $sql_xoa_danhmuc = "DELETE FROM danhmuc WHERE iddanhmuc = '" . $id . "'";
        mysqli_query($connect, $sql_xoa_danhmuc);

        // Kiểm tra lỗi
        if (mysqli_error($connect)) {
            echo "Lỗi truy vấn: " . mysqli_error($connect);
        } else {
            header('Location: ' . BASE_URL . 'admin/index.php?action=quanlydanhmucsanpham&query=them');
            exit();
        }
    }
}
