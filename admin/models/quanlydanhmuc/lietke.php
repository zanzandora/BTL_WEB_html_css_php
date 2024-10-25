<?php
$sql = "select * from danhmuc order by thutu DESC";
$query = mysqli_query($connect, $sql);
?>

<p class="title">Liệt kê danh mục sản phẩm</p>
<div class="table-container">

    <form action="xuly.php" method="POST" class="form-control--lietke">
        <table width="100%" border="1" class="">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['ten'] ?></td>
                    <td>
                        <a class="link-edit" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['iddanhmuc'] ?>">Sửa</a> |
                        <a class="link-remove" href="models/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['iddanhmuc'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>