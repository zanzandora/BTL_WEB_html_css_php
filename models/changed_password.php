<?php
include("../config/config.php");

if (isset($_POST['reset_password'])) {
    $email = $_POST['email'];
    $new_password =$_POST['repassword'];
    $old_password = $_POST['password'];
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
            // Chuyển hướng về index.php sau khi đổi mật khẩu thành công
            header("Location: ../index.php?message=success");
            exit(); // Dừng thực thi script sau khi chuyển hướng
        } else {
            echo "<script>alert('Lỗi khi cập nhật mật khẩu');</script>";
        }
    } else {
        echo "<script>alert('Email hoặc mật khẩu cũ không chính xác');</script>";
    }
}
