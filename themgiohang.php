<!-- Add product to cart -->
<?php
session_start();
include "admin/config.php";

// Cộng
if (isset($_GET['cong'])){
    $id=$_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
        if ($cart_item['id']!=$id){
            $product[] = array(     
                'product_name' => $cart_item['product_name'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'product_price' => $cart_item['product_price'],
                'product_img' => $cart_item['product_img'],
                'masp' => $cart_item['masp']);
            $_SESSION['cart'] = $product;
        }else{
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong']<=9){               
                $product[] = array(     
                    'product_name' => $cart_item['product_name'],
                    'id' => $cart_item['id'],
                    'soluong' => $tangsoluong,
                    'product_price' => $cart_item['product_price'],
                    'product_img' => $cart_item['product_img'],
                    'masp' => $cart_item['masp']);
            }else{
                $product[] = array(     
                    'product_name' => $cart_item['product_name'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'product_price' => $cart_item['product_price'],
                    'product_img' => $cart_item['product_img'],
                    'masp' => $cart_item['masp']);
            }
            $_SESSION['cart'] = $product;
        }
        
    }
    header("Location:./cart.php?quanly=giohang");
}



// Trừ
if (isset($_GET['tru'])){
    $id=$_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item){
        if ($cart_item['id']!=$id){
            $product[] = array(     
                'product_name' => $cart_item['product_name'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'product_price' => $cart_item['product_price'],
                'product_img' => $cart_item['product_img'],
                'masp' => $cart_item['masp']);
            $_SESSION['cart'] = $product;
        }else{
            $tangsoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong']>1){                
                $product[] = array(     
                    'product_name' => $cart_item['product_name'],
                    'id' => $cart_item['id'],
                    'soluong' => $tangsoluong,
                    'product_price' => $cart_item['product_price'],
                    'product_img' => $cart_item['product_img'],
                    'masp' => $cart_item['masp']);
            }else{
                $product[] = array(     
                    'product_name' => $cart_item['product_name'],
                    'id' => $cart_item['id'],
                    'soluong' => $cart_item['soluong'],
                    'product_price' => $cart_item['product_price'],
                    'product_img' => $cart_item['product_img'],
                    'masp' => $cart_item['masp']);
            }
            $_SESSION['cart'] = $product;
        }
        
    }
    header("Location:./cart.php?quanly=giohang");
}



// Delete product
if (isset($_SESSION['cart']) && isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {

            // Chạy lại session
            $product[] = array(     
                'product_name' => $cart_item['product_name'],
                'id' => $cart_item['id'],
                'soluong' => $cart_item['soluong'],
                'product_price' => $cart_item['product_price'],
                'product_img' => $cart_item['product_img'],
                'masp' => $cart_item['masp']
            );
        }
        $_SESSION['cart'] = $product;
        header("Location:./cart.php?quanly=giohang");
    }
}


// Delete all product
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1){
    unset($_SESSION['cart']);
    header("Location:./cart.php?quanly=giohang");
}






// Amount add
// Amount minus
// Add product to cart

if (isset($_POST['themgiohang'])) {
    // session_destroy();

    $id = $_GET['idsanpham'];
    $soluong = 1; //Mỗi lần click là thêm số lượng sp là 1
    $sql = "SELECT * FROM tbl_product WHERE product_id='" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array(
            'product_name' => $row['product_name'],
            'id' => $id,
            'soluong' => $soluong,
            'product_price' => $row['product_price'],
            'product_img' => $row['product_img'],
            'masp' => $row['masp']
        ));   //Mảng lồng mảng = đối tượng

        // Kiểm tra giỏ hàng có tồn tại chưa
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {    //Lấy ra từng sp trong từng mảng

                // Nếu dữu liệu trùng
                if ($cart_item['id'] == $id) {     //Nếu sản phẩm đã có trong giỏ hàng
                    $product[] = array(        //Ghi kiểu này or giống dòng 17 đều đc vì chúng giống nhau
                        'product_name' => $cart_item['product_name'],
                        'id' => $cart_item['id'],
                        'soluong' => $soluong+1,
                        'product_price' => $cart_item['product_price'],
                        'product_img' => $cart_item['product_img'],
                        'masp' => $cart_item['masp']
                    );
                    $found = true;  //Dữ liệu trùng

                // Nếu dữ liệu không trùng
                } else {
                    $product[] = array(        //Ghi kiểu này or giống dòng 17 đều đc vì chúng giống nhau
                        'product_name' => $cart_item['product_name'],
                        'id' => $cart_item['id'],
                        'soluong' =>  $cart_item['soluong'],
                        'product_price' => $cart_item['product_price'], 
                        'product_img' => $cart_item['product_img'],
                        'masp' => $cart_item['masp']
                    );
                }
            }
            if ($found == false){
                // Liên kết dữ liệu new_product với product: nếu $_SESSION['cart'] không tồn tại thì tạo cho mik 1 mảng dòng 21
                $_SESSION['cart']=array_merge($product,$new_product);  //Gộp 2 dữ liệu lại vs nhau (khỏi tạo 2 mảng khác nhau, tốn dung lượng)
            }else{
                $_SESSION['cart']=$product;
            }
        
    } else {
        $_SESSION['cart'] = $new_product;
    }
}

    // print_r($_SESSION['cart']);
    header("Location:./cart.php?quanly=giohang");
}


?>