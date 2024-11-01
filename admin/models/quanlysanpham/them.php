<div class="table-container">

    <p class="title">Thêm sản phẩm</p>
    <table class="table-controllers" border="1">
        <form action="models/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
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
                <td>Xuất xứ</td>
                <td><input type="text" name="xuatxu"></td>
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
                </td>
            </tr>
            <tr>
                <td>Màu</td>
                <td><input type="text" name="mau"></td>
            </tr>
            <tr>
                <td>Khối lượng</td>
                <td><input type="text" name="khoiluong"></td>
            </tr>
            <td>Chọn Size</td>
            <td>
                <?php
                // Lấy danh sách các size từ bảng `sizes`
                $sizeQuery = "SELECT * FROM sizes";
                $sizeResult = mysqli_query($connect, $sizeQuery);

                // Tạo các checkbox cho từng size
                while ($sizeRow = mysqli_fetch_array($sizeResult)) {
                ?>
                    <label class="size__name">
                        <input type="checkbox" class="input" name="sizes[]" value="<?php echo $sizeRow['id']; ?>"> <?php echo $sizeRow['size_name']; ?>
                        <span class="custom-checkbox"></span>
                    </label>
                <?php } ?>
            </td>
            <tr>
                <td>Chất liệu</td>
                <td><input type="text" name="chatlieu"></td>
            </tr>
            <tr>
                <td>Đế giày</td>
                <td><input type="text" name="degiay"></td>
            </tr>
            <tr>
                <td>Cao</td>
                <td><input type="text" name="cao"></td>
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
                        $query = mysqli_query($connect, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?php echo $row['iddanhmuc'] ?> "><?php echo $row['ten'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" class="button" name="themsanpham">
                        <span class="button__text">Add product</span>
                        <span class="button__icon">
                            <i class="fa fa-plus"></i>
                        </span>
                    </button></td>
            </tr>
        </form>
    </table>
</div>