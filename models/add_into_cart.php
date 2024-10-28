<?php
    session_start();
  define('BASE_URL', 'http://localhost/BTL_WEB_html_css_php/');

    include $_SERVER['DOCUMENT_ROOT'] . '/BTL_WEB_html_css_php/config/config.php';

    
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('Location:'.BASE_URL.'app.php?view=cart');

    }

    //Xóa sản phẩm: đi duyệt mang, bỏ qua phần tử có id với phần tử bị xóa, kết thúc vòng lặp in lại các sản phẩm đã duyệt.
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
            }
            $_SESSION['cart'] = $product;
            header('Location:'.BASE_URL.'app.php?view=cart');
        }
        
    }

    //Tăng giảm số lượng.
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            //Khi không kích vào dấu công thì mang san phẩm sẽ được giữ nguyên.
            if($cart_item['id']!=$id){
                $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                $_SESSION['cart'] = $product;
            }
            else{
                $tangsoluong = $cart_item['soluong']+1;
                //khi cộng sản phẩm sẽ tạo 1 mảng mới với số lượng sản phẩm được thay đổi.
                if($cart_item['soluong']<=99){
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                }else{
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                }
                $_SESSION['cart'] = $product;
            }
            header('Location:'.BASE_URL.'app.php?view=cart');
        }
    }

    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            //Khi không kích vào dấu công thì mang san phẩm sẽ được giữ nguyên.
            if($cart_item['id']!=$id){
                $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                $_SESSION['cart'] = $product;
            }
            else{
                $tangsoluong = $cart_item['soluong']-1;
                //khi trừ sản phẩm sẽ tạo 1 mảng mới với số lượng sản phẩm được thay đổi.
                if($cart_item['soluong']>=1){
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                }else{
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                }
                $_SESSION['cart'] = $product;
            }
            header('Location:'.BASE_URL.'app.php?view=cart');
        }
    }

    //Thêm sản phẩm
    if(isset($_POST['add_into_cart'])){
        $id = $_GET['id'];
        $soluong = 1;
        $sql = "select sanpham.*, danhmuc.ten AS danhmuc_ten from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc and sanpham.id='".$id."' limit 1";
        $query = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new [] = array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'gia'=>$row['gia'],'hinhanh'=>$row['hinhanh']
            ,'masanpham'=>$row['masanpham'],'danhmuc_ten' => $row['danhmuc_ten']);
            /* Kiểm tra Session giỏ hàng */
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    /* Nếu dữ liệu bị trùng */
                    if($cart_item['id']==$id){
                        $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'gia'=>$cart_item['gia']
                        ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                        $found = true;
                    }else{
                        /* Nếu dữ liệu không trùng */
                        $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                        ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'],'danhmuc_ten' => $cart_item['danhmuc_ten']);
                    }
                }
                if($found == false){
                    /* Liên kết dữ liệu */
                    $_SESSION['cart']=array_merge($product,$new);
                }else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] = $new;
            }
        }
        header('Location:'.BASE_URL.'app.php?view=cart');
    }

?>