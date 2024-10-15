<p class="title">Đơn hàng</p>
<?php
    $sql = "select * from giohang,dangky where giohang.idkhachhang=dangky.id order by giohang.id DESC";
    $query = mysqli_query($connect,$sql);
?>
<table class="table-controllers" border = "1">
    <form action="modules/quanlydanhmuc/xuly.php" method="POST">
        <tr>
            <th>ID</th>
            <th>Mã giỏ hàng</th>
            <th>ID khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Tình trạng</th>
            <th>Chức năng</th>
        </tr>
        <?php
        $i = 0;
        while($row = mysqli_fetch_array($query)){
            $i++;
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['madonhang']?></td>
                <td><?php echo $row['idkhachhang']?></td>
                <td><?php echo $row['tenkhachhang']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['sodienthoai']?></td>
                <td>
                    <?php
                        if($row['trangthai']==1){
                            echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['madonhang'].'">Đơn hàng mới</a>';
                        }else{
                            echo 'Đã thanh toán';
                        }
                    ?>
                </td>
                <td>
                    <a href="?action=donhang&query=xemdonhang&code=<?php echo $row['madonhang']?>">Xem đơn hàng</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>