<?php
    $id = $_GET['id'];
    $sql1 = "select * from sanpham where iddanhmuc='".$id."' order by sanpham.id DESC";
    $query1 = mysqli_query($connect,$sql1);

    $sql2 = "select * from danhmuc where iddanhmuc='".$id."' limit 1";
    $query2 = mysqli_query($connect,$sql2);
    $rowtittle = mysqli_fetch_array($query2);

    if (mysqli_num_rows($query1) == 0) {
        echo '<div class="header__cart-list--empty">
                <img
                    src="./assets/img/product-not-found.jpg"
                    alt=""
                    class="no_cart__img" /';
    } else {
?>
        <div class="home-filter">

<span class="home-filter__label">Sản phẩm : <?php echo $rowtittle['ten'] ?></span>
        </div>
<div class="grid__row">
        <?php
        // *lấy dữ liệu từ database và hiển thị ra trang web từng product 
        while ($row = mysqli_fetch_array($query1)) {
        ?>
            <div class="grid__column-2-4">
                <a class="product-item" href="app.php?view=product&id=<?php echo $row['id'] ?>">
                    <div class="product-item__img" style="background-image: url(<?php echo BASE_URL; ?>assets/img/goods/<?php echo $row['hinhanh'] ?>);"></div>
                    <h4 class="product-item__name">
                        <?php echo $row['tensanpham'] ?>
                    </h4>
                    <div class="product-item__price">
                        <span class="product-item__price-old">
                            <?php echo number_format($row['gia'], 0, ',', '.') . ' VNĐ' ?>
                        </span>
                        <span class="product-item__price-new">
                            <?php 
                            tinhGiaGiam($row['gia']);
                            echo number_format($gia_giam, 0, ',', '.') . ' VNĐ' ?>
                        </span>
                    </div>
                    <div class="product-item__action">
                        <span class="product-item__heart product-item__heart--liked">
                            <i class="product-item__icon-like fa-regular fa-heart"></i>
                            <i class="product-item__icon-liked fa fa-heart"></i>
                        </span>
                        
                        <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                        <span class="product-item__brand"><?php echo $row['nhasanxuat'] ?></span>
                        <div class="product-item__origin-name">
                            <?php echo $row['xuatsu'] ?>
                        </div>
                    </div>
                    <div class="product-item__sell-off">
                        <span class="product-item__sell-off-percent">40%</span>
                        <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                </a>
            </div>
        <?php }} ?>
    </div>