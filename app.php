<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>



  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />


  <!-- RESET CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.6.0-web/css/all.min.css" />
  <link rel="stylesheet" href="./assets/css/base.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />

  
</head>

<body>
  
  <div class="app">
  <?php 
    include("./views/layouts/header.php");
    ?>

    <!-- ! CONTAINER -->
    <main class="container">
      <!-- todo    grid -> grid__row -> grid__column -->
      <div class="grid">
        <div class="grid__row grid-container">
          <div class="grid__column-2">
            <nav class="container__category">
              <h3 class="category__heading">
                Danh mục
              </h3>
              <ul class="category-list">
                <li class="category-item category-item--active">
                  <a href="" class="category-item__link">Trang điểm mặt</a>
                </li>
                <li class="category-item category-item--active">
                  <a href="" class="category-item__link">Trang điểm môi</a>
                </li>
                <li class="category-item category-item--active">
                  <a href="" class="category-item__link">Trang điểm mắt</a>
                </li>
              </ul>
            </nav>
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
            <div class="home-product">
              <div class="grid__row">
                <!-- *Product Item -->
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
                <div class="grid__column-2-4">
                  <a class="product-item" href="#">
                    <div class="product-item__img" style="
                          background-image: url(https://down-vn.img.susercontent.com/file/f348423053687486bb654b7b0f56ee4c_tn);
                        "></div>
                    <h4 class="product-item__name">
                      Đồ bộ thể thao nam mặc hè xuyên biên giới, Chất thun
                      cotton thấm hút mồ hôi cực tốt Kiểu dáng Slim Fit siêu
                      đẹp DB37
                    </h4>
                    <div class="product-item__price">
                      <span class="product-item__price-old">
                        12.00.000đ
                      </span>
                      <span class="product-item__price-new">
                        92.000.000đ
                      </span>
                    </div>
                    <div class="product-item__action">
                      <span class="product-item__heart product-item__heart--liked">
                        <i class="product-item__icon-like fa-regular fa-heart"></i>
                        <i class="product-item__icon-liked fa fa-heart"></i>
                      </span>
                      <div class="product-item__rating">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <span class="product-item__sold">Đã bán: 88k</span>
                    </div>
                    <div class="product-item__origin">
                      <span class="product-item__brand">Whoo</span>
                      <div class="product-item__origin-name">
                        Nhật Bản
                      </div>
                    </div>
                    <div class="product-item__favourite">
                      <i class="fa-solid fa-check"></i>
                      <span>Yêu thích</span>
                    </div>
                    <div class="product-item__sell-off">
                      <span class="product-item__sell-off-percent">43%</span>
                      <span class="product-item__sell-off-text">Giảm</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <ul class="pagination home-product__pagination">
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  <i class="fa-solid fa-angle-left"></i>
                </a>
              </li>
              <li class="pagination-item pagination-item--active">
                <a href="" class="pagination-item__link">
                  1
                </a>
              </li>
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  2
                </a>
              </li>
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  3
                </a>
              </li>
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  4
                </a>
              </li>
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  ...
                </a>
              </li>
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  14
                </a>
              </li>
              <li class="pagination-item">
                <a href="" class="pagination-item__link">
                  <i class="fa-solid fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>

    <?php
    include("./views/layouts/footer.php");
    ?>
  </div>


  <script src="./assets/js/notifycationSrink.js"></script>
  <script src="./assets/js/openModalAuthvsRegis.js"></script>
</body>

</html>