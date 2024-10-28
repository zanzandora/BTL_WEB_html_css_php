<?php
$connect = mysqli_connect('localhost', 'root', '', 'web_shoesforwoman');

if (!$connect) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
?>