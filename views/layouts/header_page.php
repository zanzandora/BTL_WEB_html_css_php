<div class="header-with-search">
    <div class="header__banner">
        <a href="/" class="header__banner-link">
            <img
                src="./assets/img/thiet-ke-logo-cua-hang-giay-dep.jpg"
                alt=""
                class="header__banner-img" />
        </a>
    </div>
    <form action="app.php?view=search" class="header__search--form" method="post">
        <div class="header__search">
            <!-- *Search history -->
            <div class="header__search-wrap">
                <input
                    type="search"
                    class="header__search-input"
                    placeholder="Nhập để tìm kiếm sản phẩm"
                    name="key" />
                <!-- <div class="header__search-history">
                    <h3>Lịch sử tìm kiếm</h3>
                    <ul class="header__search-history-list">
                        <li class="header__search-history-item">
                            <a href="">Kem dưỡng da</a>
                        </li>
                        <li class="header__search-history-item">
                            <a href="">Kem dưỡng da</a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <!-- <div class="header__search-select">
            <span>Trong shop</span>
            <i class="fa-regular fa-circle-down"></i>

            <ul class="header__search-option">
                <li
                    class="header__search-option-item header__search-option-item--active">
                    <span>Trong shop</span>
                    <i class="fa-solid fa-check"></i>
                </li>
                <li class="header__search-option-item">
                    <span>Ngoài shop</span>
                    <i class="fa-solid fa-check"></i>
                </li>
            </ul>
        </div> -->
            <button type="submit" class="header__search-btn" name="search">

                <i class="fa-solid fa-search"></i>
            </button>
    </form>

</div>

<!-- *Cart icon -->
<div class="header__cart">
    <div class="header__cart-wrap">
        <a href="app.php?view=cart" style="color: black;">

            <i class="fa-solid fa-cart-shopping"></i>
        </a>
        <span class="header__cart-notice">
        <?php
        $tongsoluong = 0;

        // Kiểm tra xem giỏ hàng có sản phẩm không
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $cart_item) {
                // Cộng dồn số lượng của từng sản phẩm trong giỏ
                $tongsoluong += $cart_item["soluong"];
            }
        }

        // Hiển thị tổng số lượng hoặc 0 nếu giỏ hàng trống
        echo $tongsoluong > 0 ? $tongsoluong : "0";
        ?>
    </span>

    </div>
</div>