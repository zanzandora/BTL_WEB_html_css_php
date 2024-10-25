<h3>Thanh toán đơn hàng</h3>

<?php
  define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');

    session_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';

    if (!isset($_SESSION['id']) || !isset($_SESSION['cart'])) {
        die('Lỗi: Không có thông tin khách hàng hoặc giỏ hàng.');
    }
    

    
    $idkhachhang = $_SESSION['id'];
    $madonhang = rand(0,999999);
    $sql = "insert into giohang (idkhachhang,madonhang,trangthai) value ('".$idkhachhang."', '".$madonhang."', 1)";
    $query = mysqli_query($connect,$sql);
    // if (!$query) {
    //     die("Lỗi khi chèn dữ liệu vào giohang: " . mysqli_error($connect));
    // }
    if($query){
        foreach($_SESSION['cart'] as  $id => $cart_item){
            $idsanham = $cart_item['id'];
            $mau_sanpham = isset($_SESSION['mausac'][$idsanham]) ? $_SESSION['mausac'][$idsanham] : '';
            $soluong = $cart_item['soluong'];
            $sql2 = "insert into donhang (madonhang,idsanpham,soluongsp) value ('".$madonhang."', '".$idsanham."', '".$soluong."')";
            mysqli_query($connect,$sql2);
        }
    }
    
    header("Location:".BASE_URL."app.php?view=thanks_for_buying");
?>