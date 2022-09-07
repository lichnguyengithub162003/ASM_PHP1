<?php 
if (isset($_SESSION['dangky'])){
    echo 'Xin chào: ' . '<span style="color:red">' . $_SESSION['dangky'].'</span>';
    echo $_SESSION['id_user'];
}
?>
<?php session_start(); ?>

<?php
if (isset($_SESSION['cart'])) {
}
?>



<!-- ************************************ Header ******************************* -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/cart.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
</head>

<body>
    <header>
        <div class="logo"><img src="./img/screenshot_1658678333-removebg-preview.png" alt=""></div>

        <div class="menu">
            <li><a href="">TRANG CHỦ</a></li>
            <li><a href="">GIỚI THIỆU</a></li>

            <li><a href="sp.php">SẢN PHẨM</a>
                <ul class="sub-menu">
                    <li><a href="">Tản văn</a></li>
                    <li><a href="">Kỹ năng sống</a></li>
                    <li><a href="">Tâm lý học - Trinh thám</a></li>
                </ul>
            </li>

            <li><a href="">LIÊN HỆ</a></li>
        </div>

        <div class="others">
            <li><input placeholder="Tìm kiếm..." type="text"><i class="fas fa-search"></i></li>
            <li><a href=""><i class="fa-solid fa-headphones-simple"></i></a></li>
            <li><a href=""><i class="fa-solid fa-user"></i></i></a></li>
            <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
        </div>
    </header>




    <!-- ************************************* Cart ******************************** -->
    <section class="cart">
        <div class="container" style="border: none;">

            <!-- <div class="cart-top-wrap">
                <div class="cart-top">
                    
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="cart-top-adress cart-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                </div>
            </div> -->
            <h1 style="margin:0px 0px 60px 0;">LỊCH SỬ ĐƠN HÀNG</h1>

        </div>


        <div class="container">
            <div class="cart-content row">


                <!-- ------------- Left -------------- -->
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Loại bìa</th>
                            <!-- <th>Số lượng</th> -->
                            <th>Giá</th>
                            <th>Thành tiền</th>
                            <th>Xóa</th>
                        </tr>


                        <!-- --------------------------- -->
                        <?php if (isset($_SESSION['cart'])) {
                            $i = 0;
                            $tongtien = 0;

                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = ($cart_item['soluong']) * ($cart_item['product_price']);
                                $tongtien += $thanhtien;
                                // $tongsp += $cart_item['soluong'];
                                
                                $i++; ?>

                        <!-- --------------------------- -->

                                <tr>
                                    <td><img src="admin/uploads/<?php echo $cart_item['product_img'] ?>" alt=""></td>
                                    <td><p><?php echo $cart_item['product_name'] ?></p></td>
                                    <td><p>Bìa cứng</p></td>
                                    <td>                         
                                        <span style="display: flex; justify-content:space-between; align-items:center; width:100px; margin: 0 auto; boder:none;">
                                            <!-- <span class="span" style="width:30px; height:25px;margin: 0 auto;"><a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a></span> -->
                                            <span              style="width:30px; height:25px;margin: 0 auto;"><?php echo $cart_item['soluong']; ?></span>
                                            <!-- <span class="span" style="width:30px; height:25px;margin: 0 auto;"><a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a></span> -->
                                        </span>                                                              
                                    </td>
                                    <td><?php echo number_format($cart_item['product_price'],0,',','.').'<sup>đ</sup>'; ?></td>
                                    <td><p><?php echo number_format($thanhtien,0,',','.').'<sup>đ</sup>'; ?></p></td>
                                    <td><p></p></td>
                                    <td><span class="span"><a href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">X</a></span></td>
                                </tr>
                        <!-- --------------------------- -->


                            <?php } ?>   <!-- Kết foreach -->

                        


                        <!-- -------------------------------------------------------------------------------- -->
                            


                                


                            
                                
                    </table>
                </div>


                <!-- ------------- Right-------------- -->
                <div class="cart-content-right">
                    <table>
                        <tr>
                            <th colspan="2">TỔNG TIỀN TRONG GIỎ HÀNG</th> <!-- Gộp cột -->
                        </tr>
                        <tr>
                            <td>Tổng sản phẩm</td>
                            <!-- <td><?php echo number_format($tongsp);?></td> -->
                        </tr>
                        <tr>
                            <td>Tổng tiền hàng</td>
                            <td><p><?php echo number_format($tongtien,0,',','.').'<sup>đ</sup>'; ?></p></td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td><p style="color: black; font-weight: bold;"><?php echo number_format($tongtien,0,',','.').'<sup>đ</sup>'; ?></p></td>
                        </tr>
                        <?php } else { ?>
                            <?php } ?>

                    </table>

                    <!-- <div class="cart-content-right-button" style="display: flex; justify-content: right; margin:5px -19px 0;">
                        <button><a href="themgiohang.php?xoatatca=1"  style="font-size: 12px; color: #fff;">Xóa tất cả</a></button>
                    </div>


                    <div class="cart-content-right-text">
                        <p>Đơn hàng của bạn sẽ được miễn phí ship khi đơn hàng có giá trị trên 300.000 đ</p>
                        <p style="color:red; font-weight:bold;">Bạn có thể mua thêm <span style="font-size: 18px;">188.000đ</span> để được phí ship</p>
                    </div>



                    <div class="cart-content-right-button">
                        <button><a href="sp.php">TIẾP TỤC MUA SẮM</a></button>
                        <button><a href="delivery.php" style="color:#fff;">THANH TOÁN</a></button>
                    </div>
                    
                    

                        <tr><td colspan="7"><p>Hiện tại giỏ hàng trống</p></td></tr>
                        
                        

                    <div class="cart-content-right-dangnhap">
                        <p>TÀI KHOẢN PANDA</p><br>
                        <p>Hãy <a href="">Đăng nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                    </div> -->
                </div>
            </div>


        </div>
    </section>





    <!-- ************************************* Footer ****************************** -->

    <?php include "layouts/footer.php"; ?>