<!-- Đăng xuất -->
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1) {
    unset($_SESSION['signin_user']);
    header("Location: admin/login-form-14/signin_user.php");
}
?>




<!-- Đăng nhập -->
<?php 
if(!isset($_SESSION['signin_user'])){
    header("Location: admin/login-form-14/signin_user.php");
}
?>






<?php
$sql_danhmuc = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda Store</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/index.css">
    <!-- <link rel="stylesheet" href="./css/slide.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>

<body>
    <section id="wrapper">





        <!--******************************** Thanh menu **********************************-->

        <section class="menu">

            <header>

                <!-- Toggle -->
                <section id="toggle">
                    <i class="fa-solid fa-bars"></i>
                </section>


                <!-- Nav trên -->
                <nav class="nav1">
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-map-marker-alt"></i> Vietnam</a>
                            <a href="#"><i class="fas fa-angle-down"></i></a>
                            <a href="#"><i class="fas fa-phone-volume"></i> 1900 9090</a>
                        </li>

                        <li>
                            <a href="#" id="panda">PANDA</a>
                        </li>

                        <li class="cart-search">
                            <a href="cart.php">
                                <i class="fas fa-shopping-cart"></i>
                                <h6>My cart: <span class="price-cart">
                                        <!-- <-?php

                                        // Nếu tồn tại biến mảng $_SESSION[cart] thì dùng vòn lặp foreach để lấy dữ liệu
                                        if (isset($_SESSION['cart'])) {
                                            $tong = 0;
                                            foreach ($_SESSION['cart'] as $value) {
                                                $tong += $value['quantity'];
                                            }
                                            echo $tong;
                                        }
                                        ?> -->

                                    </span>items</h6>
                            </a>
                            <a href="#"><i class="fas fa-search"></i>Tìm kiếm</a>
                        </li>
                    </ul>
                </nav>

                <!-- Nav dưới -->
                <nav class="nav2">
                    <ul id="main-menu">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="gioithieu.php">Giới thiệu</a></li>
                        <li><a href="sp.php">Sản phẩm<i class="fa-solid fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <!--  -->
                                <?php
                                // include "danhmuc.php" ;
                                while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                ?>
                                    <li><a href="sp.php?quanly=danhmucsp&id=<?php echo $row_danhmuc['cartegory_id'] ?>"> <?php echo $row_danhmuc['cartegory_name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="./lienhe.php">Liên hệ</a></li>
                        <li><a href="admin/login-form-14/signin_user.php"><i class="fa-solid fa-user-graduate"></i></a>
                            <ul class="sub-menu">
                                
                                <?php 
                                if(isset($_SESSION['signin_user'])){ ?>
                                    <li><a href="index.php?dangxuat=1">Đăng xuất:   <?php if(isset($_SESSION['signin_user'])){
                                                                                            echo $_SESSION['signin_user'];
                                                                                    } ?></a></li>
                                <?php }else{ ?>
                                    <li><a href="admin/login-form-14/signin_user.php">Đăng nhập</a></li>
                                    <li><a href="admin/login-form-14/signup.php">Đăng ký</a></li>

                                <?php } ?>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>



            <!-- ------------------------------------------------------------- -->
            
            <!-- ------------------------------------------------------------- -->

            <section class="flex-end">
                <a href="#">MỪNG QUỐC TẾ THIẾU NHI 1/6</a>
                <section class="sales"><a href="./sp.php">Sản phẩm khuyến mãi</a></section>
            </section>

            <video id="video_background" src="./img/1865966700.mp4" preload="auto" autoplay="true" loop="loop" muted volume="0">
                <source src="videos/tunnel_animation.webm" type="video/webm" />
                <source src="videos/tunnel_animaAstion.ogv" type="video/ogg ogv" ; codecs="theora, vorbis" />
                <source src="videos/tunnel_animation.mp4" type="video/mp4" />
            </video>
        </section>