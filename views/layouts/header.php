<!-- ! HEADER -->


<header class="header">
  <div class="grid">
    <!-- ! NAV -->
    <nav class="header__bar">
      <ul class="header__bar-list">
        <li
          class="header__bar-item header__bar-item--has-qr header__bar-item--separate">
          <a href="app.php" class="header__bar-link-item">
            Cửa hàng bán giày dép phụ nữ
          </a>
          <!-- Begin Header QR Code -->
          <!-- <div class="header__qr">
            <img
              src="./assets/img/QR_code.png"
              alt="QR code"
              class="header__qr-img" />
            <div class="header__qr-apps">
              <a href="" class="header__qr-link-apps">
                <img
                  src="./assets/img/google_play.png"
                  alt="Google Play"
                  class="header__qr-dowload-img" />
              </a>
              <a href="" class="header__qr-link-apps">
                <img
                  src="./assets/img/app_store.png"
                  alt="App Store"
                  class="header__qr-dowload-img" />
              </a>
            </div>
          </div> -->
        </li>
        <li class="header__bar-item">
          <span class="header__bar-title">Kết nối</span>
          <a href="" class="header__bar-icon"><i class="icon fa-brands fa-facebook"></i></a>
          <a href="" class="header__bar-icon"><i class="icon fa-brands fa-instagram"></i></a>
        </li>
      </ul>
      <h3 class="header__bar-banner">shoes for women</h3>
      <ul class="header__bar-list">
        <li class="header__bar-item">
          <a href="app.php?view=contact" class="header__bar-link-item">
            <i class="icon fa-solid fa-phone"></i>
            Liên hệ
          </a>

        </li>
        <li class="header__bar-item">
          <a href="app.php?view=faq" class="header__bar-link-item">
            <i class="icon fa-solid fa-question"></i>
            Trợ giúp</a>
        </li>

        <li class="header__bar-item header__bar-user">
          <?php
          session_start();
          ?>
          <!-- <img
            src="https://lh3.googleusercontent.com/ogw/AF2bZyi6bS34oZIR6WFQwy2LW7rsyOxov__SewjE1NKHpgi53w=s32-c-mo"
            alt=""
            class="header__bar-user-img" /> -->
          <span class="header__bar-user-name">
            <?php
            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if (isset($_SESSION['username'])) {
              echo $_SESSION['username']; // Hiển thị tên người dùng
            } else {
              echo 'Khách'; // Hiển thị tên mặc định nếu chưa đăng nhập
            }
            ?>
          </span>
          <ul class="bar__user-menu">
            

            <li class="bar__user-menu-item bar__user-menu-item--separate">
              <a href="<?php echo BASE_URL; ?>models/logout.php">Đăng xuất</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- ! SEARCHING -->
    <?php
    // Kiểm tra xem người dùng đang ở trang giỏ hàng hay không
    if (isset($_GET['view']) && $_GET['view'] == 'cart') {
      // ! MAIN Header
      include(BASE_PATH . "views/layouts/cart/header_cart.php");
    } else {
      // ! SEARCHING HEADer
      include(BASE_PATH . "views/layouts/header_page.php");
    }
    ?>

  </div>
</header>