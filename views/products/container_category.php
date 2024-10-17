<!-- Danh muc -->
<nav class="container__category">
    <h3 class="category__heading">
        Danh mục
    </h3>
    <ul class="category-list">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';
        $sql = "select * from danhmuc order by iddanhmuc DESC";
        $query = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <li class="category-item category-item--active">
                <a class="category-item__link" href="app.php?quanly=danhmucsanpham&id=<?php echo $row['iddanhmuc'] ?>"><?php echo $row['ten'] ?></a>
            </li>

        <?php } ?>
    </ul>
</nav>