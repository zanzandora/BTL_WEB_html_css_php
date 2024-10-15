<?php
    $id = $_GET['id'];
    $sql = "select * from sanpham where id = '".$id."' limit 1";
    $query = mysqli_query($connect,$sql);
?>
<p>Sửa sản phẩm</p>
<table width = "100%" border = "1" style="border-collapse: collapse;">
<?php
    while($row = mysqli_fetch_array($query)){
?>
    <form action="modules/quanlysanpham/xuly.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masanpham" value="<?php echo $row['masanpham'] ?>"></td>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham" value="<?php echo $row['tensanpham'] ?>"></td>
        </tr>
        <tr>
            <td>Nhà sản xuất</td>
            <td><input type="text" name="nhasanxuat" value="<?php echo $row['nhasanxuat'] ?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh" value="<?php echo $row['hinhanh'] ?>">
                <img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" width="100">
            </td>
        </tr>
        <tr>
            <td>Khối lượng</td>
            <td><input type="text" name="khoiluong" value="<?php echo $row['khoiluong'] ?>"></td>
        </tr>
        <tr>
            <td>Dung tích xăng</td>
            <td><input type="text" name="dungtich" value="<?php echo $row['dungtich'] ?>"></td>
        </tr>
        <tr>
            <td>Động cơ</td>
            <td><input type="text" name="dongco" value="<?php echo $row['dongco'] ?>"></td>
        </tr>
        <tr>
            <td>Công suất tối đa</td>
            <td><input type="text" name="congsuat" value="<?php echo $row['congsuat'] ?>"></td>
        </tr>
        <tr>
            <td>Mô-men cực đại</td>
            <td><input type="text" name="momen" value="<?php echo $row['momen'] ?>"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="gia" value="<?php echo $row['gia'] ?>"></td>
        </tr>
        <tr>
            <td>Trạng thái</td>
            <td>
                <select name="trangthai" id="">
                    <?php
                        if($row['trangthai']==1){
                    ?>
                        <option value="1" selected >Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    <?php
                        }else{
                    ?>
                        <option value="1">Kích hoạt</option>
                        <option value="0" selected >Ẩn</option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tên danh mục</td>
            <td>
                <select name="danhmuc" id="">
                    <?php
                    $sqldanhmuc = "select * from danhmuc order by iddanhmuc DESC";
                    $querydanhmuc = mysqli_query($connect,$sqldanhmuc);
                    while($rowdanhmuc = mysqli_fetch_array($querydanhmuc)){
                        if($rowdanhmuc['iddanhmuc']==$row['iddanhmuc']){
                    ?>
                    <option selected value="<?php echo $rowdanhmuc['iddanhmuc'] ?>"><?php echo $rowdanhmuc['ten'] ?> </option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $rowdanhmuc['iddanhmuc'] ?> "><?php echo $rowdanhmuc['ten'] ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suasanpham"></td>
        </tr>
    </form>
    <?php } ?>
</table>