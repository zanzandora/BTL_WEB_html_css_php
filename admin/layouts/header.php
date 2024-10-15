<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['login']);
        header("Location:login.php");
    }
?>
    <style>
        

        

        

        .container-name {
            text-align: right;
           
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        .example_c {
            font-family: 'Open Sans';
            color: white ;
            text-transform: uppercase;
            text-decoration: none;
            background: transparent;
            display: inline-block;
            transition: all 0.4s ease 0s;
            font-size: 2rem;
            width: 100%;
    padding: 30px 0;

            /* Makes the link take up the full width of the li */
            height: 30px;
            line-height: 30PX;
        }

        .example_c:hover {
            color: #ffffff;
            background: tomato;
            transition: all 0.4s ease 0s;
        }
    </style>

    <div class="container-name">
        <a class="example_c" href="../index.php?dangxuat=1" target="_blank" onclick="logout(event)">
            <span>
                LOG OUT
            </span>
                <?php
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                }
                ?>
        </a>
    </div>
    <script>
    function logout(event) {
        event.preventDefault(); // Prevents the default link behavior
        var confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            window.location.href = "../index.php?dangxuat=1"; // Redirects to the logout page
        }
    }
</script>