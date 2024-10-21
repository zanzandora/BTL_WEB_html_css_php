<?php
include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';
$id = $_GET['id'];
    $sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc and sanpham.id='".$id."' limit 1";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($query)){
?>


<!-- ! CONTAINER -->
<main class="container">
    <!-- todo    grid -> grid__row -> grid__column -->
    <div class="grid grid-container">
        <div class="product-detail">
            <div class="grid__column-5 flex--center">
                <div class="product-detail__img " style="background-image: url(<?php echo BASE_URL; ?>assets/img/<?php echo $row['hinhanh'] ?>);"></div>
            </div>
            <div class="grid__column-8 ">
                <div class="product-detail__info">
                    <div class="product-detail__name">
                        <p>
                        <?php echo $row['tensanpham'] ?>
                        </p>
                    </div>
                    <div class="product-detail__price">
                        <p>
                        <?php echo number_format($row['gia'],0,',','.').' VNĐ' ?>
                        </p>
                    </div>
                    <div class="product-detail__info-classify">
                        <p>Phân loại hàng: <span>Đồ bộ ngủ nữ</span></p>
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

                            <button class="btn info-size__option--btn">S</button>
                            <button class="btn info-size__option--btn">M</button>
                            <button class="btn info-size__option--btn">L</button>
                            <button class="btn info-size__option--btn">XL</button>
                            <button class="btn info-size__option--btn">XL</button>
                            <button class="btn info-size__option--btn">XL</button>
                        </div>
                    </div>
                    <div class="product-detail__action">
                        <a href="" class="btn btn--primary product-detail__action--putIntoCart">
                            Thêm giỏ hàng
                        </a>
                        <a href="" class="btn btn--primary product-detail__action--buy">
                            Mua Hàng
                        </a>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php } ?>