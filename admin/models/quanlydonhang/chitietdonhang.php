<h3 class="title">Chi tiết đơn hàng</h3>
<?php
    $code = $_GET['code'];
    $sql = "select * from donhang,sanpham where donhang.idsanpham=sanpham.id and donhang.madonhang='".$code."' order by donhang.id DESC";
    $query = mysqli_query($connect,$sql);
?>
<table class="table-controllers" border = "1" >
    <form action="models/quanlydanhmuc/xuly.php" method="POST">
        <thead>

            <tr>
                <th>ID</th>
                <th>Mã đơn hàng</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 0;
            $tongtien = 0;
            while($row = mysqli_fetch_array($query)){
                $i++;
                $thanhtien = $row['gia']*$row['soluongsp'];
                $tongtien += $thanhtien;
            ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row['madonhang']?></td>
                    <td><?php echo $row['tensanpham']?></td>
                    <td><?php echo $row['soluongsp']?></td>
                    <td><?php echo number_format($row['gia'],0,',','.').' VNĐ'?></td>
                    <td><?php echo number_format($row['gia']*$row['soluongsp'],0,',','.').' VNĐ'?></td>
                </tr>
            <?php
            }
            ?>
            <tfoot>
                <tr>
                <td colspan="6">
                    <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ'?></p>
                </td>
                </tr>
            </tfoot>
        </tbody>
    </form>
</table>