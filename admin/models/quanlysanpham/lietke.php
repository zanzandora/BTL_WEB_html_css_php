<?php
    $sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc order by sanpham.id DESC";
    $query = mysqli_query($connect,$sql);
?>
<div class="table-container">

    <p class="title">Liệt kê sản phẩm</p>
    <table class="table-controllers table-lietkesp" border = "1" >
        <form action="modules/quanlydanhmuc/xuly.php" method="POST">
            <tr>
                <th>ID</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Nhà sản xuất</th>
                <th>Hình ảnh</th>
                <th>Khối lượng</th>
                <th>Động cơ</th>
                <th>Công suất</th>
                <th>Mô-men</th>
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
                    <td><img src="../../../assets/img/<?php echo $row['hinhanh']?>" width="100"></td>
                    <td><?php echo $row['khoiluong']?></td>
                    <td><?php echo $row['dongco']?></td>
                    <td><?php echo $row['congsuat']?></td>
                    <td><?php echo $row['momen']?></td>
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
                        <a href="modules/quanlysanpham/xuly.php?id=<?php echo $row['id']?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </form>
    </table>
</div>