<?php
include('../../config/config.php');
    $id = $_GET['id'];
    $sql_xoa = "delete from lienhe where id = '".$id."'";
    mysqli_query($connect,$sql_xoa);
    header('location:../../index.php?action=quanlylienhe&query=lietke');
?>