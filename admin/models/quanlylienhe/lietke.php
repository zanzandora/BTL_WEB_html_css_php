<?php
    $sql = "select * from lienhe";
    $query = mysqli_query($connect,$sql);
?>

<p class="title">Liên hệ của khách hàng</p>
<table class="table-controllers" border = "1" >
    <form action="modules/quanlydanhmuc/xuly.php" method="POST">
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Nội dung</th>
            <th>Chức năng</th>
        </tr>
        <?php
        $i = 0;
        while($row = mysqli_fetch_array($query)){
            $i++;
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['hoten']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['sodienthoai']?></td>
                <td><?php echo $row['noidung']?></td>
                <td> 
                    <a href="modules/quanlylienhe/xuly.php?id=<?php echo $row['id']?>">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>