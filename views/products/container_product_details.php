<?php
include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';
$id = $_GET['id'];
$sql = "select sanpham.*, danhmuc.ten AS danhmuc_ten from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc and sanpham.id='" . $id . "' limit 1";
$query = mysqli_query($connect, $sql);

// Lấy các kích cỡ có sẵn cho sản phẩm từ bảng sanpham_size
$sql_sizes = "SELECT sizes.size_name FROM sanpham_size 
JOIN sizes ON sanpham_size.idsize = sizes.id 
WHERE sanpham_size.idsanpham = '" . $id . "'";
$query_sizes = mysqli_query($connect, $sql_sizes);
$available_sizes = [];
while ($size_row = mysqli_fetch_array($query_sizes)) {
    $available_sizes[] = $size_row['size_name'];
}
while ($row = mysqli_fetch_array($query)) {

?>


    <!-- ! CONTAINER -->
    <main class="container">
        <!-- todo    grid -> grid__row -> grid__column -->
        <div class="grid grid-container">
            <div class="product-detail">
                <div class="grid__column-5 flex--center">
                    <div class="product-detail__img " style="background-image: url(<?php echo BASE_URL; ?>assets/img/goods/<?php echo $row['hinhanh'] ?>);"></div>
                </div>
                <div class="grid__column-8 ">
                    <form action="<?php echo BASE_URL; ?>models/add_into_cart.php?id=<?php echo $row['id'] ?>" method="post">
                        <div class="product-detail__info">
                            <div class="product-detail__name">
                                <p>
                                    <?php echo $row['tensanpham'] ?>
                                </p>
                            </div>
                            <div class="product-detail__price">
                                <p>
                                    <?php
                                    tinhGiaGiam($row['gia']);
                                    echo number_format($gia_giam, 0, ',', '.') . ' VNĐ' ?>
                                </p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Phân loại hàng: <span><?php echo $row['danhmuc_ten'] ?></span></p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Nhà sản xuất: <span><?php echo $row['nhasanxuat'] ?></span></p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Xuất xứ: <span><?php echo $row['xuatsu'] ?></span></p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Khối lượng: <span><?php echo $row['khoiluong'] ?>g</span></p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Chất liệu: <span><?php echo $row['chatlieu'] ?></span></p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Đế giày: <span><?php echo $row['degiay'] ?></span></p>
                            </div>
                            <div class="product-detail__info-classify">
                                <p>Độ cao: <span><?php echo $row['cao'] ?> cm</span></p>
                            </div>

                            <div class="product-detail__info-color">
                                <p>Màu sắc:
                                    <span>
                                        <?php echo $row['mau'] ?>
                                    </span>
                                </p>
                            </div>
                            <div class="product-detail__info-size">
                                <p>Kích cỡ:</p>
                                <div class="info-size__option">
                                <?php
                                $sizes = ['S', 'M', 'L', 'XL', 'XXL']; // Các kích cỡ cần hiển thị  
                                foreach ($sizes as $size) {
                                    $is_available = in_array($size, $available_sizes); // Kiểm tra xem kích cỡ có sẵn không
                                    $button_class = $is_available ? '' : ' btn--disable'; // Thêm class btn--disable nếu không có sẵn
                                    echo '<button class="btn info-size__option--btn' . $button_class . '" type="button" ' . ($is_available ? '' : 'disabled') . '>' . $size . '</button>';
                                }
                                ?>
                                    <!-- <button class="btn info-size__option--btn">S</button>
                                    <button class="btn info-size__option--btn">M</button>
                                    <button class="btn info-size__option--btn">L</button>
                                    <button class="btn info-size__option--btn">XL</button>
                                    <button class="btn info-size__option--btn">XL</button>
                                    <button class="btn info-size__option--btn">XL</button> -->
                                </div>
                            </div>
                            <div class="product-detail__action">
                                <input type="submit" name="add_into_cart" class="btn btn--primary product-detail__action--putIntoCart" value="Thêm giỏ hàng">


                                <!-- <input type="submit" name="add_into_cart" class="btn btn--primary product-detail__action--buy" value="Mua hàng"> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>
<?php } ?>