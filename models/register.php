<?php
include("../config/config.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['address'];
    if ($password !== $repassword) {
        echo '<p style="color: red">Mật khẩu và mật khẩu nhập lại không khớp!</p>';
    }else{

        // Kiểm tra xem username hoặc email đã tồn tại chưa
        $check_user = "SELECT * FROM dangky WHERE tenkhachhang='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($connect, $check_user);
    
        if (!$result) {
            die("Lỗi truy vấn: " . mysqli_error($connect));
        }
    
        $user = mysqli_fetch_assoc($result);
    
        if ($user) { // Nếu username hoặc email đã tồn tại
            if ($user['tenkhachhang'] === $username) {
                echo '<p style="color: red">Username đã tồn tại!</p>';
            }
    
            if ($user['email'] === $email) {
                echo '<p style="color: red">Email đã tồn tại!</p>';
            }
        } else {
            // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
            
    
            $sql = "INSERT INTO dangky (tenkhachhang, email, sodienthoai, diachi, matkhau) VALUES ('$username', '$email', '$phone', '$address', '$password')";
            if(mysqli_query($connect, $sql)){
                echo "<script>
                alert('Đăng ký thành công!');
                setTimeout(function() {
                    window.location.href = '../index.php';
                }, 500); // Chờ 500ms (tương đương 2 giây) trước khi chuyển hướng
            </script>";
            } else {
                echo '<p style="color: red">Đăng ký thất bại!</p>';
            }
        }
    }
}
?>