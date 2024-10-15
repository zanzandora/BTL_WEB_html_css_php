<?php
$connect = mysqli_connect('localhost', 'root', '', 'web_bangiaydepphunu');

if (!$connect) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>