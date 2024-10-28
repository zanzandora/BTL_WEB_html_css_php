<?php

$sql = "SELECT sanpham.*, danhmuc.ten, GROUP_CONCAT(sizes.size_name  ORDER BY sizes.size_name SEPARATOR ', ') as sizes
FROM sanpham
JOIN danhmuc ON sanpham.iddanhmuc = danhmuc.iddanhmuc
LEFT JOIN sanpham_size ON sanpham.id = sanpham_size.idsanpham
LEFT JOIN sizes ON sanpham_size.idsize = sizes.id
GROUP BY sanpham.id
ORDER BY sanpham.id DESC";
$query = mysqli_query($connect, $sql);
if (!$query) {
    die("Lỗi truy vấn: " . mysqli_error($connect));
}
?>
<div class="table-container">

    <p class="title">Liệt kê sản phẩm</p>
    <table class="table-controllers table-lietkesp" border = "1" >
        <form action="models/quanlydanhmuc/xuly.php" method="POST">
            <tr>
                <th>ID</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Nhà sản xuất</th>
                <th>Xuất xứ</th>
                <th>Hình ảnh</th>
                <th>Màu</th>
                <th>Khối lượng</th>
                <th>Kích cỡ</th>

                <th>Chất liệu</th>
                <th>Đế giày</th>
                <th>Cao</th>
                <th>Gía</th>
                <th>Trạng thái</th>
                <th>Danh mục</th>
                <th width="80px">Quản lý</th>
            </tr>
            <?php
            $i = 0;
            while($row = mysqli_fetch_array($query)){
                $i++;
            ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row['masanpham']?></td>
                    <td><?php echo $row['tensanpham']?></td>
                    <td><?php echo $row['nhasanxuat']?></td>
                    <td><?php echo $row['xuatsu']?></td>
                    <td><img src="<?php echo BASE_URL; ?>assets/img/goods/<?php echo $row['hinhanh']?>" width="100"></td>
                    <td><?php echo $row['mau']?></td>
                    <td><?php echo $row['khoiluong']?></td>
                    <td><?php echo $row['sizes'] ? $row['sizes'] : 'Chưa có kích cỡ'; ?></td>

                    <td><?php echo $row['chatlieu']?></td>
                    <td><?php echo $row['degiay']?></td>
                    <td><?php echo $row['cao']?></td>
                    <td><?php echo $row['gia']?></td>
                    <td><?php if($row['trangthai']==1){
                        echo 'Kích hoạt';
                    } else{
                        echo 'Ẩn';
                    }
                    
                    ?>
                    </td>
                    <td><?php echo $row['ten']?></td>
                    <td>
                        <a href="?action=quanlysanpham&query=sua&id=<?php echo $row['id']?>">Sửa</a> | 
                        <a href="models/quanlysanpham/xuly.php?id=<?php echo $row['id']?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </form>
    </table>
</div>