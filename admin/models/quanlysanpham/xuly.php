<?php
define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/');


require_once('../../../config/config.php');

$masanpham = $_POST['masanpham'];
$tensanpham = $_POST['tensanpham'];
$nhasanxuat = $_POST['nhasanxuat'];
$xuatxu = $_POST['xuatxu'];
$hinhanh = $_FILES['hinhanh']['name'];

// $hinhanh = time().'_'.$hinhanh;
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

// Kiểm tra nếu file đã tồn tại, thêm số thứ tự vào tên file để tránh ghi đè
// Đường dẫn lưu trữ file
$target_directory = '' . BASE_PATH . 'assets/img/goods/';
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
$kichco = isset($_POST['sizes']) ? $_POST['sizes'] : [];
$kichco_string = implode(',', $kichco);
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
    move_uploaded_file($hinhanh_tmp, '' . BASE_PATH . 'assets/img/goods/' . $hinhanh);

    // Lấy ID của sản phẩm vừa được thêm
    $product_id = mysqli_insert_id($connect);

    // Lưu các size được chọn vào bảng `product_sizes`
    if (isset($_POST['sizes'])) {
        $sizes = $_POST['sizes'];
        foreach ($sizes as $size_id) {
            $sizeInsertQuery = "INSERT INTO product_sizes (idsanpham, idsize) VALUES ('$product_id', '$size_id')";
            mysqli_query($connect, $sizeInsertQuery);
        }
    }
    header('location:../../index.php?action=quanlysanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    $id = $_GET['id'];
    if ($hinhanh != '') {

        $sql_del_img = "SELECT * FROM sanpham WHERE id = '" . $id . "' LIMIT 1";
        $query = mysqli_query($connect, $sql_del_img);
        $row = mysqli_fetch_array($query);
        if ($row && !empty($row['hinhanh'])) {
            unlink('' . BASE_PATH . 'assets/img/goods/' . $row['hinhanh']);
        }
        $sql_sua = "UPDATE sanpham SET 
                        masanpham = '" . $masanpham . "', 
                        tensanpham = '" . $tensanpham . "', 
                        nhasanxuat = '" . $nhasanxuat . "', 
                        xuatsu = '" . $xuatxu . "',
                        hinhanh = '" . $hinhanh . "', 
                        mau = '" . $mau . "',
                        khoiluong = '" . $khoiluong . "', 
                        kichco = '" . $kichco_string . "', 
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
                        xuatsu = '" . $xuatxu . "',
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

    $delete_sizes_query = "DELETE FROM sanpham_size WHERE idsanpham = '$id'";
    $delete_result = mysqli_query($connect, $delete_sizes_query);
    if (!$delete_result) {
        die("Truy vấn xóa kích thước cũ thất bại: " . mysqli_error($connect));
    }
    // Thêm kích thước mới nếu chưa có trong bảng product_sizes
    if (isset($_POST['sizes'])) {
        $sizes = $_POST['sizes'];
        
        foreach ($sizes as $size_id) {
            // Kiểm tra kích thước đã tồn tại chưa
            $check_size_query = "SELECT * FROM sanpham_size WHERE idsanpham = '$id' AND idsize = '$size_id'";
            $check_size_result = mysqli_query($connect, $check_size_query);
            if (!$check_size_result) {
                die("Truy vấn kiểm tra kích thước thất bại: " . mysqli_error($connect));
            }
            // Nếu kích thước chưa tồn tại, thêm mới vào bảng
            if (mysqli_num_rows($check_size_result) == 0) {
                $sizeInsertQuery = "INSERT INTO sanpham_size (idsanpham, idsize) VALUES ('$id', '$size_id')";
                $insert_result = mysqli_query($connect, $sizeInsertQuery);
                if (!$insert_result) {
                    die("Truy vấn chèn kích thước thất bại: " . mysqli_error($connect));
                }
            }
        }
    }
    header('location:../../index.php?action=quanlysanpham&query=them');
} else {
    $id = $_GET['id'];

    $sql_del_img = "SELECT * FROM sanpham WHERE id = '" . $id . "' LIMIT 1";
    $query = mysqli_query($connect, $sql_del_img);
    // while ($row = mysqli_fetch_array($query)) {
    //     if (!empty($row['hinhanh'])) {
    //         unlink('../../../assets/img/goods/' . $row['hinhanh']);
    //     }
    // }

    // Xóa các kích thước liên quan đến sản phẩm trong bảng `product_sizes`
    $sql_xoa_sizes = "DELETE FROM sanpham_size WHERE idsanpham = '" . $id . "'";
    mysqli_query($connect, $sql_xoa_sizes);

    // Xóa sản phẩm khỏi bảng `sanpham`
    $sql_xoa = "DELETE FROM sanpham WHERE id = '" . $id . "'";
    mysqli_query($connect, $sql_xoa);
    header('location:' . BASE_URL . 'admin/index.php?action=quanlysanpham&query=them');
}
