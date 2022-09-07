<?php
include "admin/config.php";

$sql_chitiet = "SELECT * FROM tbl_product,tbl_cartegory
                      WHERE tbl_product.cartegory_id = tbl_cartegory.cartegory_id
                      AND tbl_product.product_id = '$_GET[id]'
                      LIMIT 1 ";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>




    <!DOCTYPE html>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SP chi tiết</title>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="./css/bogia.css" />
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
                                    <a href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
                                    <a href="#"><i class="fas fa-search"></i> Tìm kiếm</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Nav dưới -->
                        <nav class="nav2">
                            <ul id="main-menu">
                                <li><a href="./index.php">Trang chủ</a></li>
                                <li><a href="./gioithieu.php">Giới thiệu</a></li>
                                <li><a href="./sp.php">Sản phẩm <i class="fa-solid fa-caret-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="./sp.php">Tản văn</a></li>
                                        <li><a href="./sp.php">Kỹ năng sống</a></li>
                                        <li><a href="./sp.php">Tâm lý học - Trinh thám</a></li>
                                    </ul>
                                </li>
                                <li><a href="./lienhe.php">Liên hệ</a></li>
                                <li><a href="login-form-14/signin_user.php"><i class="fa-solid fa-user-graduate"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="login-form-14/signin_user.php">Đăng nhập</a></li>
                                        <li><a href="./Dangky.php">Đăng ký</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </header>


                    <!-- ------------------------- Banner ---------------------------------- -->

                    <!-- <section class="header_img"><img src="./img/Liberty Library Facebook Cover.png" alt=""></section> -->

                </section>

                <!-- ------------------------------------ Products ------------------------------------- -->

                <section class="product">
                    <section class="container">

                        <!-- Caption on image -->
                        <section class="product-top">
                            <p>Trang chủ</p> <span>&#10230; </span>
                            <p>Nhà sách Panda</p> <span>&#10230;</span>
                            <p><?php echo $row_chitiet['cartegory_name'] ?></p> <span>&#10230;</span>
                            <p><?php echo $row_chitiet['product_name'] ?></p>
                        </section>

                        <section class="product-content">

                            <!-- Left -->
                            <section class="product-content-left">

                                <figure class="product-content-left-big-img">
                                    <!-- Big image -->
                                    <section>
                                        <img src="admin/uploads/<?php echo $row_chitiet['product_img'] ?>" alt="">
                                    </section>
                                </figure>


                                <figure class="product-content-left-small-img">
                                    <!-- Small image -->
                                    <section>
                                        <!-- <img src="../img/SP/bố già.jpg" alt="" width="100" height="130"> -->
                                        <img src="admin/uploads/<?php echo $row_chitiet['product_img'] ?>" alt="" width="100" height="130">
                                    </section>
                                </figure>


                            </section>


                            <!-- Right -->
                            <section class="product-content-right">

                                <form style="padding: 30px 50px;" method="POST" action="themgiohang.php?idsanpham=<?php echo $row_chitiet['product_id'] ?>">

                                    <!-- Name -->
                                    <section class="product-content-right-product-name">

                                        <!-- Product name -->
                                        <h1 style="font-size: 30px; margin:0;"><?php echo $row_chitiet['product_name'] ?></h1>

                                        <!--  -->
                                        <p>Tác giả: <span style="font-size: 12px;"> Mario Puzo</span> | Đứng thứ 3 trong Top
                                            1000 Tác phẩm kinh điển bán chạy tháng này</p>
                                        <!-- <p>Mã sản phẩm: </?php echo $row_chitiet['masp'] ?></p> -->
                                    </section>

                                    <!-- Price -->
                                    <section class="product-content-right-product-price">
                                        <p><?php echo number_format($row_chitiet['product_price'], 0, ',', '.') . '<sup>đ</sup>' ?></p>
                                    </section>

                                    <!-- Color -->
                                    <section class="product-content-right-product-color">
                                        <p><span style="font-weight:bold;">Màu sắc:</span></p>
                                        <section class="product-content-right-product-color-img">
                                            <img src="./img/SP/bố già (2).jpg" alt="" width="6%">
                                        </section>
                                    </section>

                                    <!-- Size -->
                                    <section class="product-content-right-product-size">
                                        <p style="font-weight: bold;">Loại bìa:</p>
                                        <section class="size">
                                            <span class="choose-size activeS">Bìa mềm</span>
                                            <span class="choose-size">Bìa cứng</span>
                                            <!-- <span class="choose-size">L</span>
                                    <span class="choose-size">XL</span>
                                    <span class="choose-size">XXL</span> -->
                                        </section>
                                        <p style="color: red;">Vui lòng chọn loại bìa <span style="color: red;">*</span></p>
                                    </section>

                                    <!-- Quantity -->
                                    <section class="quantity">
                                        <p style="font-weight: bold;">Số lượng: <input type="number" name="soluong" min="0" value="1"><?php echo $row_chitiet['soluong'] ?></p>
                                        <!-- <p style="font-weight: bold;">Hàng còn: </?php echo $row_chitiet['soluong'] ?></p> -->
                                    </section>

                                    <!-- Button -->
                                    <section class="product-content-right-product-button">
                                        <button type="submit" name="themgiohang"><i class="fas fa-shopping-cart"></i> MUA HÀNG</button>
                                        <button>
                                            <p>TÌM TẠI CỬA HÀNG</p>
                                        </button>
                                    </section>


                                    <!-- Icons -->
                                    <section class="product-content-right-product-icon">

                                        <!-- Phone -->
                                        <section class="product-content-right-product-icon-item">
                                            <p><i class="fas fa-phone-alt"></i> Hotline</p>
                                        </section>

                                        <!-- Chat -->
                                        <section class="product-content-right-product-icon-item">
                                            <p><i class="fas fa-comments"></i> Chat</p>
                                        </section>

                                        <!-- Mail -->
                                        <section class="product-content-right-product-icon-item">
                                            <p><i class="fas fa-envelope"></i> Mail</p>
                                        </section>
                                    </section>

                                    <!-- QR -->
                                    <section class="product-content-right-product-QR">
                                        <img src="./img/QR.jpg" alt="" width="10%">
                                    </section>
                                </form>

                            </section>

                        </section>



                        <!-- *Line content* -->
                        <div class="tabs">
                            <ul id="tabs-nav">
                                <li><a href="#tab1">Chi tiết</a></li>
                                <li><a href="#tab2">Mô tả sản phẩm</a></li>
                                <li><a href="#tab3">Bảo quản</a></li>
                                <!-- <li><a href="#tab4">Jay</a></li> -->
                            </ul> <!-- END tabs-nav -->
                            <div id="tabs-content">
                                <div id="tab1" class="tab-content">
                                    <?php echo $row_chitiet['product_desc'] ?>
                                </div>
                                <div id="tab2" class="tab-content">
                                <?php echo $row_chitiet['product_desc'] ?>
                                </div>
                                <div id="tab3" class="tab-content">
                                <?php echo $row_chitiet['product_desc'] ?>
                                </div>
                                <!-- <div id="tab4" class="tab-content">
                                    <h2>Jay</h2>
                                    <p>"I don't care if she's my cousin or not, I'm gonna knock those boots again tonight."</p>
                                </div> -->
                            </div> <!-- END tabs-content -->
                        </div> <!-- END tabs -->
                    </section>

                </section>
            </section>






            <!-- ********************************** Footer ******************************** -->

            <footer>
                <section class="common">

                    <section class="footer1">

                        <section class="text">
                            <p style="font-size: 30px; font-weight: 700; margin-top: 13px;">ĐĂNG KÝ NHẬN KHUYẾN MÃI</p>
                            <p style="margin-top: -20px; font-size: 14px;">Đừng bỏ lỡ lỡ những sản phẩm và chương trình
                                khuyến mãi hấp dẫn</p>
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
                                <p><span><a href="./lienhe.php"><i class="fa-solid fa-location-dot"></i></a> Địa chỉ cửa
                                        hàng</span></p>
                                <caption>Số 163, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ</caption>

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

            </section>


            <!-- <script src="./js/sp_chitiet.js"></script> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script type="text/javascript">
                // Show the first tab and hide the rest
                $('#tabs-nav li:first-child').addClass('active');
                $('.tab-content').hide();
                $('.tab-content:first').show();

                // Click function
                $('#tabs-nav li').click(function() {
                    $('#tabs-nav li').removeClass('active');
                    $(this).addClass('active');
                    $('.tab-content').hide();

                    var activeTab = $(this).find('a').attr('href');
                    $(activeTab).fadeIn();
                    return false;
                });
            </script>
        </body>

        </html>
    <?php } ?>