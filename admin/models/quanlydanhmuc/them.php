<p class="title">Thêm danh mục sản phẩm</p>
<div class="table-container">
    <form class="form-control--themdanhmucsp"
        action="models/quanlydanhmuc/xuly.php" method="POST">
        <table class="table-them" border="1">

            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" name="tendanhmuc" required></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name="thutu" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="themdanhmuc" class="button">
                        <span class="button__text">Add category</span>
                        <span class="button__icon">
                            <i class="fa fa-plus"></i>
                        </span>
                    </button>
                </td>
            </tr>
        </table>
    </form>
</div>