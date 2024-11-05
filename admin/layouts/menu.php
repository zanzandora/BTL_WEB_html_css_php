<ul class="admin-list">
    <h1 style="border-bottom: 2px solid aliceblue;
    padding-bottom: 26px;
    margin: 30px 14px;">
        ADMIN</h1>
    <li class="admin-list-item"><a class="admin-list-item__link" href="index.php?action=quanlydanhmucsanpham&query=them">category</a></li>
    <li class="admin-list-item"><a class="admin-list-item__link" href="index.php?action=quanlysanpham&query=them">product</a></li>
    <li class="admin-list-item"><a class="admin-list-item__link" href="index.php?action=quanlydonhang&query=lietke">order</a></li>
    <li class="admin-list-item"><a class="admin-list-item__link" href="index.php?action=quanlylienhe&query=lietke">feedback</a></li>
</ul>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['login']);
    header("Location:login.php");
}
?>

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