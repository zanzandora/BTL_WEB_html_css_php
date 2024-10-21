<div class="header-with-search">
    <div class="header__banner">
        <a href="/" class="header__banner-link">
            <img
                src="./assets/img/thiet-ke-logo-cua-hang-giay-dep.jpg"
                alt=""
                class="header__banner-img" />
        </a>
    </div>
    <div class="header__search">
        <!-- *Search history -->
        <div class="header__search-wrap">
            <input
                type="text"
                class="header__search-input"
                placeholder="Nhập để tìm kiếm sản phẩm" />
            <div class="header__search-history">
                <h3>Lịch sử tìm kiếm</h3>
                <ul class="header__search-history-list">
                    <li class="header__search-history-item">
                        <a href="">Kem dưỡng da</a>
                    </li>
                    <li class="header__search-history-item">
                        <a href="">Kem dưỡng da</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__search-select">
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
        </div>
        <button class="header__search-btn">
            <i class="fa-solid fa-search"></i>
        </button>
    </div>
    <!-- *Cart icon -->

    <div class="header__cart">
        <div class="header__cart-wrap">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="header__cart-notice">3</span>
            <!-- ? No cart: header__cart-list--empty -->

            <div class="header__cart-list">
                <img
                    src="./assets/img/product-not-found.jpg"
                    alt=""
                    class="no_cart__img" />

                <!-- *Cart when have Items -->
                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                <ul class="header__cart-list-item">
                    <li class="header__cart-item">
                        <img
                            src="./assets/img/xe_rua.jpg"
                            alt=""
                            class="header__cart-img" />
                        <div class="header__cart-item-info">
                            <div class="header__cart-item-title">
                                <h4>Xe rùa 2 chân đời mới siêu xịn xò con bò</h4>
                                <article>
                                    <span class="header__cart-item-price">100.000đ</span>
                                    <span class="header__cart-item-mutil">x</span>
                                    <span class="header__cart-item-qnt">2</span>
                                </article>
                            </div>
                            <section>
                                <span>Phân loại hàng: Xanh</span>
                                <spann class="header__cart-item-remove">Xóa</spann>
                            </section>
                        </div>
                    </li>
                    <li class="header__cart-item">
                        <img
                            src="./assets/img/xe_rua.jpg"
                            alt=""
                            class="header__cart-img" />
                        <div class="header__cart-item-info">
                            <div class="header__cart-item-title">
                                <h4>Xe rùa 2 chân đời mới</h4>
                                <article>
                                    <span class="header__cart-item-price">100.000đ</span>
                                    <span class="header__cart-item-mutil">x</span>
                                    <span class="header__cart-item-qnt">2</span>
                                </article>
                            </div>
                            <section>
                                <span>Phân loại hàng: Xanh</span>
                                <spann class="header__cart-item-remove">Xóa</spann>
                            </section>
                        </div>
                    </li>
                    <li class="header__cart-item">
                        <img
                            src="./assets/img/xe_rua.jpg"
                            alt=""
                            class="header__cart-img" />
                        <div class="header__cart-item-info">
                            <div class="header__cart-item-title">
                                <h4>Xe rùa 2 chân đời mới</h4>
                                <article>
                                    <span class="header__cart-item-price">100.000đ</span>
                                    <span class="header__cart-item-mutil">x</span>
                                    <span class="header__cart-item-qnt">2</span>
                                </article>
                            </div>
                            <section>
                                <span>Phân loại hàng: Xanh</span>
                                <spann class="header__cart-item-remove">Xóa</spann>
                            </section>
                        </div>
                    </li>
                </ul>
               
                <a class="header__cart-list-btn-check-view btn btn--primary" href="app.php?view=cart">Xem giỏ hàng</a>
            </div>
        </div>
    </div>
</div>