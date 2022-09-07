<?php

session_start();

// Lấy id sản phẩm
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Khởi tạo biến mảng session[cart] và kiểm tra
if (isset($_SESSION['cart'])) {

    // Nếu sản phẩm mà người dùng click thêm vào giỏ hàng đã tồn tại thì số lượng sản phẩm tăng lên
    $_SESSION['cart']['$id']['quantity'] += 1;
    header("Location: ../sp.php");
}else {
    
    // Nếu sản phẩm chưa từng tồn tại trong giỏ hàng, được ng dùng click - thêm vào giỏ hàng thì số lượng sản phẩm  = 1
    $_SESSION['cart']['$id']['quantity'] = 1;
    header("Location: ../sp.php");
}


?>