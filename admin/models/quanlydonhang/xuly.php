<?php
    include('../../config/config.php');
    if(isset($_GET['code'])){
        $trangthai = $_GET['trangthai'];
        $code = $_GET['code'];
        $sql = "update giohang set trangthai = 0 where madonhang = '".$code."'";
        $query = mysqli_query($connect,$sql);
        header('Location:../../index.php?action=quanlydonhang&query=lietke');
    }
?>