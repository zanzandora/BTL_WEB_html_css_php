<?php
  define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');

session_start();
session_destroy(); // Hủy session
header("Location:". BASE_URL); // Điều hướng về trang chủ hoặc trang đăng nhập
exit();
?>