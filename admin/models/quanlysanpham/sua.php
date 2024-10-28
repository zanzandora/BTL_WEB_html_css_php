<?php
    $id = $_GET['id'];
    $sql = "select * from sanpham where id = '".$id."' limit 1";
    $query = mysqli_query($connect,$sql);

    // Lấy tất cả kích thước từ bảng `sizes`
    $sql_sizes = "SELECT * FROM sizes";
    $sizes_result = mysqli_query($connect, $sql_sizes);

     // Lấy các kích thước hiện tại của sản phẩm từ bảng `product_sizes`
     $sql_product_sizes = "SELECT idsanpham FROM sanpham_size WHERE idsanpham = '".$id."'";
     $product_sizes_result = mysqli_query($connect, $sql_product_sizes);
     $selected_sizes = [];
     while ($product_size_row = mysqli_fetch_array($product_sizes_result)) {
         $selected_sizes[] = $product_size_row['idsanpham'];
     }
?>
<p>Sửa sản phẩm</p>
<table width = "100%" border = "1" style="border-collapse: collapse;">
<?php
    while($row = mysqli_fetch_array($query)){
?>
    <form action="models/quanlysanpham/xuly.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
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
            <td>Xuất xứ</td>
            <td><input type="text" name="xuatxu" value="<?php echo $row['xuatsu'] ?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh" value="<?php echo $row['hinhanh'] ?>">
                <img src="<?php echo BASE_URL; ?>assets/img/goods/<?php echo $row['hinhanh']?>" width="100">
            </td>
        </tr>
        <tr>
            <td>Màu</td>
            <td><input type="text" name="mau" value="<?php echo $row['mau'] ?>"></td>
        </tr>
        <tr>
            <td>Khối lượng</td>
            <td><input type="text" name="khoiluong" value="<?php echo $row['khoiluong'] ?>"></td>
        </tr>
        <tr>
            <td>Kích thước (Sizes)</td>
            <td>
                <?php while ($size = mysqli_fetch_array($sizes_result)) { ?>
                    <input type="checkbox" name="sizes[]" value="<?php echo $size['id']; ?>" 
                        <?php echo in_array($size['id'], $selected_sizes) ? 'checked' : ''; ?>>
                    <?php echo $size['size_name']; ?>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Chất liệu</td>
            <td><input type="text" name="chatlieu" value="<?php echo $row['chatlieu'] ?>"></td>
        </tr>
        <tr>
            <td>Đế giày</td>
            <td><input type="text" name="degiay" value="<?php echo $row['degiay'] ?>"></td>
        </tr>
        <tr>
            <td>Độ cao</td>
            <td><input type="text" name="cao" value="<?php echo $row['cao'] ?>"></td>
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