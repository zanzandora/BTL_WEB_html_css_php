
<div class="main">
    

    <?php
        if(isset($_GET['action']) && isset($_GET['query'])){
            $tamp = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tamp = '';
            $query = '';
        }

        if($tamp == 'quanlydanhmucsanpham' && $query == 'them'){
            include("models/quanlydanhmuc/them.php");
            include("models/quanlydanhmuc/lietke.php");
        }elseif($tamp == 'quanlydanhmucsanpham' && $query == 'sua'){
            include("models/quanlydanhmuc/sua.php");
        }elseif($tamp == 'quanlysanpham' && $query == 'them'){
            include("models/quanlysanpham/them.php");
            include("models/quanlysanpham/lietke.php");
        }elseif($tamp == 'quanlysanpham' && $query == 'sua'){
            include("models/quanlysanpham/sua.php");
        }elseif($tamp == 'quanlydonhang' && $query == 'lietke'){
            include("models/quanlydonhang/lietke.php");
        }elseif($tamp == 'donhang' && $query == 'xemdonhang'){
            include("models/quanlydonhang/chitietdonhang.php");
        }elseif($tamp == 'quanlylienhe' && $query == 'lietke'){
            include("models/quanlylienhe/lietke.php");
        }else{
            include("dasboard.php");
        }
    ?>
    
</div>