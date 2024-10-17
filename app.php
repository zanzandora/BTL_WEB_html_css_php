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
  <?php

define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/');

?>
  
</head>

<body>
  
  <div class="app">
  <?php 
    include("./views/layouts/header.php");
    ?>

    <!-- ! CONTAINER -->
    <?php 
    include("./views/layouts/container.php");
    ?>

    <?php
    include("./views/layouts/footer.php");
    ?>
  </div>


  <script src="./assets/js/notifycationSrink.js"></script>
  <script src="./assets/js/openModalAuthvsRegis.js"></script>
</body>

</html>