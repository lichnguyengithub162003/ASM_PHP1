<!-- All products -->
<?php
include "admin/config.php";
$sql_danhmuc = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

$sql_pro = "SELECT * FROM tbl_product, tbl_cartegory 
            WHERE tbl_product.cartegory_id = tbl_cartegory.cartegory_id
            ORDER BY tbl_product.product_id DESC LIMIT 12";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>


<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sản phẩm</title>
        <link rel="stylesheet" href="./css/sp.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                                <a href="#">Vietnamese <i class="fas fa-angle-down"></i></a>
                                <a href="#"><i class="fas fa-phone-volume"></i> 1900 9090</a>
                            </li>

                            <li>
                                <a href="#" id="panda">PANDA</a>
                            </li>

                            <li class="cart-search">
                                <a href="cart.php">
                                    <i class="fas fa-shopping-cart"></i>
                                    <!-- <h6>My cart: <span class="price-cart">
                                            <*?php

                                            // Nếu tồn tại biến mảng $_SESSION[cart] thì dùng vòn lặp foreach để lấy dữ liệu
                                            if (isset($_SESSION['cart'])) {
                                                $tong = 0;
                                                foreach ($_SESSION['cart'] as $value) {
                                                    $tong += $value['quantity'];
                                                }
                                                echo $tong;
                                            }
                                            ?>

                                        </span>items</h6> -->
                                </a>
                                <a href="#"><i class="fas fa-search"></i> Tìm kiếm</a>
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
                                    <li><a href="admin/login-form-14/signin_user.php">Đăng nhập</a></li>
                                    <li><a href="admin/login-form-14/signup.php">Đăng ký</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </header>


                <!-- ------------------------- Banner ---------------------------------- -->

                <section class="header_img"><img src="./img/slider_1.webp" alt=""></section>

            </section>





            <!-- ******************************* Main ************************************ -->

            <main>

                <!-- Title -->
                <section class="filter_option">
                    <h2>Tất cả sách</h2>
                    <section class="filter_option_input">
                        <p>Ưu tiên xem: </p>

                        <input type="radio" name="option" checked>Hàng mới nhất
                        <input type="radio" name="option"> Hàng cũ nhất
                        <input type="radio" name="option"> Giá tăng dẫn
                        <input type="radio" name="option"> Giá giảm dần
                    </section>
                </section>


                <section>
                    <hr width="90.5%" style=" margin: 0 auto; border: #dedede solid 0.5px;">
                </section>


                <section class="main-up">

                    <!-- Menu -->
                    <nav class="menu-nav">
                        <ul>
                            <h3>Thể loại sách</h3>

                            <li>
                                <a href=""><input type="checkbox"> Tản văn</a>
                                <a href=""><input type="checkbox"> Sách kỹ năng sống</a>
                                <a href=""><input type="checkbox"> Sách tâm lý học</a>
                                <a href=""><input type="checkbox"> Sách trinh thám</a>
                                <a href=""><input type="checkbox"> Sách tình cảm</a>
                            </li>
                        </ul>

                        <!--  -->
                        <ul>
                            <h3>Tác giả</h3>

                            <li>
                                <a href=""><input type="checkbox"> Nguyễn Nhật Ánh</a>
                                <a href=""><input type="checkbox"> Mario Puzo</a>
                                <a href=""><input type="checkbox"> Rosie Nguyễn</a>
                                <a href=""><input type="checkbox"> Matt Haig</a>
                                <a href=""><input type="checkbox"> Diệp Hồng Vũ</a>
                                <a href=""><input type="checkbox"> Jeffrey Archer</a>
                                <a href=""><input type="checkbox"> Thomas Harris</a>
                            </li>
                        </ul>

                        <!--  -->
                        <ul>
                            <h3>Giá cả</h3>

                            <li>
                                <a href=""><input type="checkbox"> Giá dưới 50.000đ</a>
                                <a href=""><input type="checkbox"> 50.000đ - 100.000đ</a>
                                <a href=""><input type="checkbox"> 100.000đ - 200.000đ</a>
                                <a href=""><input type="checkbox"> 200.000đ - 500.000đ</a>
                                <a href=""><input type="checkbox"> 500.000đ - 1.000.000đ</a>
                                <a href=""><input type="checkbox"> Giá trên 1.000.000đ</a>
                            </li>
                        </ul>

                        <!--  -->
                        <ul>
                            <h3>Đánh giá</h3>

                            <li>
                                <a href=""><input type="checkbox"> <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i> từ 5 sao</a>
                                <a href=""><input type="checkbox"> <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i> từ 4 sao</a>
                                <a href=""><input type="checkbox"> <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i> từ 3 sao</a>
                                <a href=""><input type="checkbox"> <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i> từ 2 sao</a>
                                <a href=""><input type="checkbox"> <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i> từ 1 sao</a>
                                <a href=""><input type="checkbox"> <i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i><i class="fa-solid fa-star" style="color: rgb(159, 159, 159);"></i> từ 0 sao</a>
                            </li>
                        </ul>
                    </nav>






                    <!-- -------------------------------- Products ------------------------------- -->

                    <section class="product">

                        <form class="as_total" method="post">



                            <ul class="products">

                                <!-- ----------------------------------------------------------------------------------------- -->

                                <?php
                                // include "layouts/danhmuc.php";
                                while ($row = mysqli_fetch_array($query_pro)) { ?>
                                    <li>
                                        <section class="product-item">
                                            <section class="product-top">
                                                <a href="" class="product-thumb">
                                                    <img src="admin/uploads/<?php echo $row['product_img'] ?>" alt="">
                                                </a>

                                                <a href="bogia.php?quanly=sanpham&id=<?php echo $row['product_id'] ?>" class="buy-now">Mua ngay</a>
                                            </section>

                                            <section class="product-info">
                                                <a href="#" class="product-cat"><?php echo $row['cartegory_name'] ?></a>
                                                <a href="#" class="product-name"><?php echo $row['product_name'] ?></a>
                                                <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i> | Đã bán 1000+
                                                <section class="product-price"><?php echo number_format($row['product_price'], 0, ',', '.') . 'đ' ?></section>
                                            </section>
                                        </section>
                                    </li>
                                <?php } ?>

                                <!-- ----------------------------------------------------------------------------------------- -->

                            </ul>



                            <section class="next">
                                <ul>1</ul>
                                <ul>2</ul>
                                <ul>3</ul>
                                <ul>4</ul>
                                <ul>...</ul>
                                <ul><i class="fa-solid fa-angle-right"></i></ul>
                            </section>
                        </form>
                    </section>
                </section>
                </main>
        </section>
        </section>








        

        







        <!-- ********************************** Footer ******************************** -->

        <footer>
            <section class="common">

                <section class="footer1">

                    <section class="text">
                        <p style="font-size: 30px; font-weight: 700; margin-top: 13px;">ĐĂNG KÝ NHẬN KHUYẾN MÃI</p>
                        <p style="margin-bottom: 15px; margin-top: 10px; font-size: 14px;">Đừng bỏ lỡ lỡ những sản phẩm và chương trình khuyến mãi hấp dẫn</p>
                    </section>

                    <section class="form">
                        <input type="email" placeholder="       Email của bạn">
                        <section class="signout"><a href="#">Đăng ký</a></section>
                    </section>
                </section>

                <section class="ft">
                    <!-- Left -->
                    <section class="left">
                        <section class="img"><img src="./img/White_and_Black_Panda_Cute_T_Shirt-removebg-preview.png" alt="" width="100%"></section>

                        <section class="information">
                            <p><span><a href="./lienhe.php"><i class="fa-solid fa-location-dot"></i></a> Địa chỉ cửa hàng</span></p>
                            <p>Số 163, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ</p>
                            <p><span>Hotline:</span> 1900 4650 | <span>Email:</span> pandashop@lich.vn</p>
                            <p><span>Web:</span> kinhdoanh.ml</p>
                        </section>

                        <section class="follow">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-youtube"></i>
                        </section>

                        <section class="brand">
                            <section><img src="./img/googleplay.png" alt="" width="150px"></section>
                            <section><img src="./img/png-clipart-google-play-apple-app-store-android-lecture-schedule-text-label-removebg-preview.png" alt="" width="150px"></section>
                        </section>
                    </section>



                    <!-- Right -->
                    <section class="right">

                        <section class="right1">
                            <h2>Về chúng tôi</h2>
                            <p>Trang chủ</p>
                            <p>Giới thiệu</p>
                            <p>Sản phẩm</p>
                            <p>Tin tức</p>
                            <p>Liên hệ</p>
                        </section>


                        <section class="right2">
                            <h2>Chính sách</h2>
                            <p>Bảo hành</p>
                            <p>Sửa chữa</p>
                            <p>Thu cũ đổi mới</p>
                            <p>Bookcare</p>
                            <p>Chăm sóc khách hàng</p>
                        </section>

                    </section>

                </section>

            </section>

            <section class="license">
                <p>@ Bản quyền thuộc về Panda Shop | Cung cấp bởi Floppy</p>
            </section>

        </footer>
        <script src="./js/sp.js"></script>
    </body>

</php>