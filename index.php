<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/8e521e1169.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/login_resgister.css">
</head>
<body>
    <div class="container">
        <div class="singin-singup">
            <form action="models/login.php" class="sign-in-form" method="post">
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<p style="color: red">' . $_SESSION['error_message'] . '</p>';
                    unset($_SESSION['error_message']);
                }
                ?>
                <input type="submit" name="login" value="Sign In" class="btn">
                <p class="social-text">Are you an admin ? <a href="./admin/login_admin.php">Click here</a></p>
                
            </form>
            <form action="models/register.php" class="sign-up-form" method="post">
                <h2 class="title">Sign Up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" name="register" value="Sign Up" class="btn">
                
                
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>member of our website?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                        libero neque. Vestibulum ante ipsum primis in faucibus orci luctus
                        et ultrices posuere cubilia Curae; Donec velit neque,
                        convallis eget, eleifend luctus, ultricies eu, nibh.
                    </p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to our website?</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut
                        libero neque. Vestibulum ante ipsum primis in faucibus orci luctus
                        et ultrices posuere cubilia Curae; Donec velit neque,
                        convallis eget, eleifend luctus, ultricies eu, nibh.
                    </p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/animationLogin.js"></script>
</body>
</html>