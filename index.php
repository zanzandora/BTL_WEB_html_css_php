<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/8e521e1169.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/login_resgister.css?v=<?php echo time(); ?>">
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
                <p class="social-text">Forgot your password? <a href="#" onclick="swapForm()">Click here to reset</a></p>

            </form>

            <!-- Form Đổi mật khẩu (ẩn ban đầu) -->
            <form action="models/changed_password.php" class="reset-password-form" method="post" style="display: none;">
                <h2 class="title">Reset Password</h2>
                
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required id="email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required id="password">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="repassword" placeholder="New Password" required id="repassword">
                </div>
                <button type="submit" name="reset_password" class="btn">Reset Password</button>
                <p class="social-text">Remember your password? <a href="#" onclick="swapForm()">Click here to sign in</a></p>
                <p id="error-message" style="color: red"></p>
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
                    <i class="fas fa-phone"></i>
                    <input type="text" name="phonenumber" placeholder="Phone Number" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="address" placeholder="Address" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="repassword" placeholder="Confirm Password" required>
                </div>

                <input type="submit" name="register" value="Sign Up" class="btn">


            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>member of our website?</h3>
                    <p>
                    Sign in to shop quickly, track orders easily and enjoy many attractive offers
                    </p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to our website?</h3>
                    <p>
                    Create an account now to discover exciting features and the best shopping experience!
                    </p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
            </div>
        </div>
    </div>
    <div id="toast">
        
    </div>
    <script src="./assets/js/animationLogin.js"></script>
    <script src="./assets/js/swapForm.js"></script>
    <script src="./assets/js/toast_message.js?v=1.0.1"></script>
</body>

</html>