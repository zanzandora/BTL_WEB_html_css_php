<main class="container">
    <!-- todo    grid -> grid__row -> grid__column -->
    <div class="grid">
        <div class="grid__row grid-container">
            <div class="grid--full_width">
                <div class="container__header-filter">
                    <h3 class="header-filter__heading grid__column-2">
                        Sản phẩm
                    </h3>
                    <ul class="header-filter-list">
                        <li class="header-filter-item header-filter-item--active">
                            Đơn giá
                        </li>
                        <li class="header-filter-item header-filter-item--active">
                            Số lượng
                        </li>
                        <li class="header-filter-item header-filter-item--active">
                            Thành tiền
                        </li>
                        <li class="header-filter-item header-filter-item--active">
                            Thao tác
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid__row grid-container">
            <div class="grid--full_width">
            <form method="POST" action="<?php echo BASE_URL; ?>models/pay.php">
                <!-- *Home product -->
                <?php
                if (isset($_SESSION['cart'])) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';

                    $i = 0;
                    $tongtien = 0;
                    foreach ($_SESSION['cart'] as $cart_item) {
                        if (isset($cart_item['soluong']) && isset($cart_item['gia'])) {
                            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                            $tongtien += $thanhtien;
                        } else {
                            $thanhtien = 0;
                        }
                        $i++;
                        $id = $cart_item['id'];
                        $sql = "select * from sanpham where id = $id";
                        $query = mysqli_query($connect, $sql);
                        $row = mysqli_fetch_array($query);
                ?>
                        <div class="products-added-into-cart">
                            <a class="products-added-into-cart__link" href="#">
                                <div
                                    class="products-added-into-cart__link-img"
                                    style="
                                    background-image: url(<?php echo BASE_URL; ?>assets/img/<?php echo  $cart_item['hinhanh'] ?>);"></div>
                            </a>
                            <div class="products-added-into-cart__name">
                                <a href="" class="products-added-into-cart__name-link">
                                    <?php echo $cart_item['tensanpham'] ?>
                                </a>
                            </div>
                            <div class="products-added-into-car__classify">
                                Phân loại hàng: <br />
                                <span>Ducati</span>
                            </div>
                            <div class="products-added-into-car__unit-price">
                                <?php echo number_format($cart_item['gia'],0,',','.').' VNĐ' ?>
                            </div>
                            <div class="products-added-into-car__quantity">
                                <div class="quantity-input">
                                    <a href="<?php echo BASE_URL; ?>models/add_into_cart.php?cong=<?php echo $cart_item['id']?>" class="btn btn--primary quantity-input__increase">
                                        <i class="fa-regular fa-plus"></i>
                                    </a>
                                    <p class="quantity-input__num"><?php echo $cart_item['soluong'] ?></p>
                                    <a  href="<?php echo BASE_URL; ?>models/add_into_cart.php?tru=<?php echo $cart_item['id']?>" class="btn btn--primary quantity-input__decrease">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="products-added-into-car__total-price">
                                <?php echo number_format($thanhtien,0,',','.').' VNĐ' ?>
                            </div>
                            <div class="products-added-into-car__action">
                                <a href="<?php echo BASE_URL; ?>models/add_into_cart.php?xoa=<?php echo $cart_item['id']?>" class="btn btn--primary action--delete">
                                    Xóa
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <div class="product-total-price product-total-price--active-pseudo">
                    <div class="product-total-price__action--delete-all">
                        <a href="<?php echo BASE_URL; ?>models/add_into_cart.php?xoatatca=1" class="btn btn--primary">
                            Xóa tất cả
                        </a>
                    </div>
                    <div class="product-total-price__label">
                        <p>Tổng tiền :  <?php echo number_format($tongtien,0,',','.').' VNĐ'?></p>
                    </div>
                    <div class="product-total-price__action--buy">
                        <input  type="submit" class="btn btn--primary" value="Mua Ngay">
                           
                        </input>    
                    </div>
                </div>
                <?php }else{ ?>
                    <div class="header__cart-list--empty">
                <img
                    src="./assets/img/product-not-found.jpg"
                    alt=""
                    class="no_cart__img" />
               <?php  }?>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- Thêm script để khi cuộn xuống cuối trang thì hiện nút mua ngay -->
<script>
    // Hàm để kiểm tra xem đã cuộn đến cuối trang chưa
    window.addEventListener('scroll', function() {
        // Lấy div mà bạn muốn kích hoạt
        const triggerDiv = document.querySelector('.product-total-price');

        // Lấy vị trí của phần tử so với trang
        const rect = triggerDiv.getBoundingClientRect();

        // Kiểm tra xem phần tử đã nằm trong viewport chưa và trang đã cuộn đến cuối
        if (rect.bottom <= window.innerHeight && rect.bottom > window.innerHeight - triggerDiv.offsetHeight) {
            triggerDiv.classList.add('product-total-price--active-pseudo'); // Thêm lớp active khi chạm đáy
        } else {
            triggerDiv.classList.remove('product-total-price--active-pseudo'); // Bỏ lớp active nếu không chạm đáy
        }
    });
</script>