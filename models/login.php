<?php
session_start();
include("../config/config.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     // Mã hóa mật khẩu trước khi kiểm tra

    // Kiểm tra kết nối cơ sở dữ liệu
    if (!$connect) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Truy vấn SQL để kiểm tra username và password
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($connect, $sql);

    // Kiểm tra truy vấn SQL
    if (!$result) {
        die("Lỗi truy vấn: " . mysqli_error($connect));
    }

    $count = mysqli_num_rows($result);
    if($count > 0){
        $user = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $user['username']; // Lưu tên người dùng
        $_SESSION['id'] = $user['id'];
        
        $_SESSION['login'] = $username;
        header("Location: ../app.php");
    } else {
        echo "<script>
        alert('Tài khoản hoặc mật khẩu không chính xác !!!');
        window.location.href = '../index.php'; // Chuyển hướng sau khi hiển thị thông báo
    </script>";
    }
}
?>