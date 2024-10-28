<?php
include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';
// *lệnh sql để tính toán trang
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = 1;
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 10) - 10;
}
$sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc order by sanpham.id ASC limit $begin,10";
$query = mysqli_query($connect, $sql);
?>

<!-- *Product Item -->
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


    <?php
    // * Lấy tổng số lượng sản phẩm để tính số trang
    $sql2 =  "select * from sanpham";
    $query2 = mysqli_query($connect, $sql2);
    $row = mysqli_num_rows($query2);
    $trang = ceil($row / 6);
    ?>
    <ul class="pagination home-product__pagination">
        <li class="pagination-item" onclick="goToFirstPage()">
            <a class="pagination-item__link"  href="javascript:void(0)">
                <i class="fa-solid fa-angle-left"></i>
            </a>
            <?php for ($i = 1; $i <= $trang; $i++) { ?>
        </li>
        <li class="pagination-item <?php echo ($i == $page) ? 'pagination-item--active' : ''; ?>">
            <a class="pagination-item__link" href="<?php echo BASE_URL; ?>app.php?trang=<?php echo $i ?>">
                <?php echo $i ?>
            </a>
        </li>
    <?php } ?>
    <li class="pagination-item" onclick="goToLastPage()">
        <a href="" class="pagination-item__link"  href="javascript:void(0)">
            <i class="fa-solid fa-angle-right"></i>
        </a>
    </li>
    </ul>


</div>
<script>
    function goToPage() {
       
    }
    function goToLastPage() {
        event.preventDefault();
        window.location.href = `app.php?trang=<?php echo $trang; ?>`;
    }

    function goToFirstPage() {
        event.preventDefault();

        window.location.href = `app.php?trang=1`;
    }
</script>