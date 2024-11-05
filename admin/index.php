<!DOCTYPE html>
<html lang="en">

<head>
<?php

define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
  <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.6.0-web/css/all.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/admin_pages.css?v=<?php echo time(); ?>">

</head>

<body>
    <nav>

        <?php

        include("../config/config.php");
        include("./layouts/menu.php");
        ?>

        
    </nav>
    <div class="wrapper">
        <?php
        include("./layouts/main.php");
        ?>
    </div>

</body>

</html>