<main class="container">
  <!-- todo    grid -> grid__row -> grid__column -->
  <!-- nav bar -->
  <div class="grid">
    <div class="grid__row grid-container">
      <div class="grid__column-2">
        <!-- Danh muc -->
        <?php
        include(BASE_PATH . "views/products/container_category.php");
        ?>
      </div>
      <div class="grid__column-10">
        <!-- *Home Filter -->
        <div class="home-filter">
          <span class="home-filter__label">Sắp xép theo</span>
          <button class="home-filter__btn btn">Phổ biến</button>
          <button class="home-filter__btn btn btn--primary">
            Mới nhất
          </button>
          <button class="home-filter__btn btn">Bán chạy</button>
          <div class="select-input select-price">
            <span class="select-price__label">Giá</span>
            <i class="select-input__icon fa-regular fa-circle-down"></i>
            <ul class="select-price__list select-input__list">
              <li class="select-price__item select-input__item">
                <a href="" class="select-price__link select-input__link">Giá: Thấp đến cao</a>
              </li>
              <li class="select-price__item select-input__item">
                <a href="" class="select-price__link select-input__link">Giá: Cao đến thấp</a>
              </li>
            </ul>
          </div>
          <div class="home-filter__page">
            <span class="home-filter__page-num">
              <span class="home-filter__page-current">1</span>/14
            </span>
            <div class="home-filter__page-control">
              <a href="" class="home-filter__page-btn home-filter__page-btn--disable">
                <i class="home-filter__page-icon fa-solid fa-angle-left"></i>
              </a>
              <a href="" class="home-filter__page-btn">
                <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- *Home Product -->
        <?php
        include(BASE_PATH . "views/products/producs_display.php");
        ?>
      </div>
    </div>
</main>