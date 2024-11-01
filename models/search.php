<?php
$key = "";
    if(isset($_POST['search'])){
        $key = $_POST['key'];
    }
    $sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc and sanpham.tensanpham like '%".$key."%'";
    $query = mysqli_query($connect,$sql);
?>
<div class="home-product">
    <div class="grid__row">
        <?php
        // *lấy dữ liệu từ database và hiển thị ra trang web từng product 
        while ($row = mysqli_fetch_array($query)) {
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
                            <?php echo number_format($row['gia'], 0, ',', '.') . ' VNĐ' ?>
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
                    <!-- <div class="product-item__favourite">
                        <i class="fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                    </div> -->
                    <div class="product-item__sell-off">
                        <span class="product-item__sell-off-percent">40%</span>
                        <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>


    


</div>