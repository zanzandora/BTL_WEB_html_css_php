<div class="table-container">

    <p class="title">Thêm sản phẩm</p>
    <table class="table-controllers" border = "1" >
        <form action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" name="masanpham"></td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="tensanpham"></td>
            </tr>
            <tr>
                <td>Nhà sản xuất</td>
                <td><input type="text" name="nhasanxuat"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><input type="file" name="hinhanh"></td>
            </tr>
            <tr>
                <td>Khối lượng</td>
                <td><input type="text" name="khoiluong"></td>
            </tr>
            <tr>
                <td>Dung tích xăng</td>
                <td><input type="text" name="dungtich"></td>
            </tr>
            <tr>
                <td>Động cơ</td>
                <td><input type="text" name="dongco"></td>
            </tr>
            <tr>
                <td>Công suất tối đa</td>
                <td><input type="text" name="congsuat"></td>
            </tr>
            <tr>
                <td>Mô-men cực đại</td>
                <td><input type="text" name="momen"></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="text" name="gia"></td>
            </tr>
            <tr>
                <td>Trạng thái</td>
                <td>
                    <select name="trangthai" id="">
                        <option value="1">Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên danh mục</td>
                <td>
                    <select name="danhmuc" id="">
                        <?php
                        $sql = "select * from danhmuc order by iddanhmuc DESC";
                        $query = mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_array($query)){
                        ?>
                        <option value="<?php echo $row['iddanhmuc'] ?> "><?php echo $row['ten'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
            </tr>
        </form>
    </table>
</div>