<?php
$id = $_GET['iddanhmuc'];
$sql = "select * from danhmuc where iddanhmuc = '" . $id . "' limit 1";
$query = mysqli_query($connect, $sql);
?>
<p class="title">Sửa danh mục sản phẩm</p>
<table class="table-sua" border="1">
    <form action="models/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" value="<?php echo $row['ten'] ?>" name="tendanhmuc"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" value="<?php echo $row['thutu'] ?>" name="thutu"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="suadanhmuc" class="button">
                        <span class="button__text">Edit category</span>
                        <span class="button__icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </span>
                    </button>
                </td>
            </tr>
        <?php } ?>
    </form>
</table>