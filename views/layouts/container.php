<main class="container">
  <!-- todo    grid -> grid__row -> grid__column -->
  <!-- nav bar -->
  <div class="grid">
    <div class="grid__row grid-container">
      <div class="grid__column-2">
        <!-- Danh muc -->
        <?php
        include(BASE_PATH . "views/products/list_category.php");
        ?>
      </div>
      <div class="grid__column-10">
        <!-- *Home Filter -->
        <?php
        if ($view == 'product_category') {
          include(BASE_PATH . "views/products/container_category.php");
        ?>

          <!-- *Home Product -->
        <?php
        } elseif ($view == 'search') {
          include(BASE_PATH . "models/search.php");
        } else {
          include(BASE_PATH . "views/products/producs_display.php");
        }
        ?>
      </div>
    </div>
</main>