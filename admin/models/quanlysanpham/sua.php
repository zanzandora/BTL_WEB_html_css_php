<?php
$id = $_GET['id'];
$sql = "select * from sanpham where id = '" . $id . "' limit 1";
$query = mysqli_query($connect, $sql);

// Lấy tất cả kích thước từ bảng `sizes`
$sql_sizes = "SELECT * FROM sizes";
$sizes_result = mysqli_query($connect, $sql_sizes);

// Lấy các kích thước hiện tại của sản phẩm từ bảng `product_sizes`
$sql_product_sizes = "SELECT idsanpham FROM sanpham_size WHERE idsanpham = '" . $id . "'";
$product_sizes_result = mysqli_query($connect, $sql_product_sizes);
$selected_sizes = [];
while ($product_size_row = mysqli_fetch_array($product_sizes_result)) {
    $selected_sizes[] = $product_size_row['idsanpham'];
}
?>
<p>Sửa sản phẩm</p>
<table width="100%" border="1" style="border-collapse: collapse;">
    <?php
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <form action="models/quanlysanpham/xuly.php?id=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
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
                <div class="file-input">
                        <input
                            type="file"
                            name="hinhanh"
                            id="file-input"
                            class="file-input__input" />
                        <label class="file-input__label" for="file-input">
                            <svg
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="upload"
                                class="svg-inline--fa fa-upload fa-w-16"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    fill="currentColor"
                                    d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                            </svg>
                            <span>Upload file</span></label>
                    </div>
                    <img src="<?php echo BASE_URL; ?>assets/img/goods/<?php echo $row['hinhanh'] ?>" width="100" style="margin-top:10px;">
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
                        <label class="size__name">
                            <input class="input" type="checkbox" name="sizes[]" value="<?php echo $size['id']; ?>" 
                            <?php echo in_array($size['id'], $selected_sizes) ? 'checked' : ''; ?>>
                            <?php echo $size['size_name']; ?>
                            <span class="custom-checkbox"></span>
                        </label>
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
                        if ($row['trangthai'] == 1) {
                        ?>
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Kích hoạt</option>
                            <option value="0" selected>Ẩn</option>
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
                        $querydanhmuc = mysqli_query($connect, $sqldanhmuc);
                        while ($rowdanhmuc = mysqli_fetch_array($querydanhmuc)) {
                            if ($rowdanhmuc['iddanhmuc'] == $row['iddanhmuc']) {
                        ?>
                                <option selected value="<?php echo $rowdanhmuc['iddanhmuc'] ?>"><?php echo $rowdanhmuc['ten'] ?> </option>
                            <?php
                            } else {
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
                <td colspan="2"><button type="submit" class="button" name="suasanpham">
                        <span class="button__text">Edit product</span>
                        <span class="button__icon">
                            <i class="fa fa-plus"></i>
                        </span>
                    </button></td>
            </tr>
        </form>
    <?php } ?>
</table>