<?php
include("../config/config.php");

if (isset($_POST['reset_password'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $old_password = isset($_POST['password']) ? $_POST['password'] : '';
    $new_password = isset($_POST['repassword']) ? $_POST['repassword'] : '';
    $sql = "select * from dangky where email='" . $email . "' and matkhau='" . $old_password . "' limit 1";
    if (!$sql) {
        die("Lỗi khi chèn dữ liệu vào giohang: " . mysqli_error($connect));
    }
    $row = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $sql2 = "UPDATE dangky SET matkhau = '$new_password' WHERE email = '$email'";
        $query2 = mysqli_query($connect, $sql2);

        if ($query2) {
            // Hiển thị thông báo thành công và chuyển về trang đăng nhập
            echo "<script>
                sessionStorage.setItem('toast_message', 'Đổi mật khẩu thành công!');
                sessionStorage.setItem('toast_type', 'success');
                window.location.href = '../index.php';
            </script>";
            exit();  // Dừng thực thi script sau khi chuyển hướng
        } else {
            echo "<script>
                sessionStorage.setItem('toast_message', 'Mật khẩu hoặc email không đúng');
                sessionStorage.setItem('toast_type', 'error');
                window.location.href = '../index.php';
            </script>";
            exit();
        }
    } else {
        echo "<script>
                sessionStorage.setItem('toast_message', 'Mật khẩu hoặc email không đúng');
            sessionStorage.setItem('toast_type', 'error');
            sessionStorage.setItem('input_email', '$email');
            sessionStorage.setItem('input_old_password', '$old_password');
            sessionStorage.setItem('input_new_password', '$new_password');
            window.location.href = '../index.php';
                
                
            </script>";
            exit();
    }
}
