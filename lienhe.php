<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/lienhe.css">
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
                        <li><a href="./Dangnhap.php"><i class="fa-solid fa-user-graduate"></i></a>
                            <ul class="sub-menu">
                                <li><a href="./Dangnhap.php">Đăng nhập</a></li>
                                <li><a href="./Dangky.php">Đăng ký</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>


            <!-- ------------------------- Banner ---------------------------------- -->

            <section class="header_img"><img
                    src="./img/Brown Gradient Virtual Meeting Room For Zoom Virtual Background.png" alt=""></section>

        </section>






        <!-- ---------------------------------- Bản đồ ----------------------------------------->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.877608157931!2d105.75497671409536!3d10.026957492832675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a089d294a53693%3A0xf3d0fb7758da72d0!2zVHLGsOG7nW5nIGNhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1656247975827!5m2!1svi!2s"
            width="100%" height="600" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>







        <!-- ----------------------------------- Content ------------------------------------- -->
        <section class="content">

            <!-- Left -->
            <article class="content_left">
                <h1>THÔNG TIN LIÊN HỆ</h1>

                <p><span><a href="./Dangky.php"><i class="fa-solid fa-location-dot"></i></a> Địa chỉ cửa
                        hàng</span></p>
                <caption>Số 163, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ</caption>

                <p><span>Hotline:</span> 1900 4650 </p>
                <p><span>Email:</span> pandashop@lich.vn</p>
                <p><span>Web:</span> kinhdoanh.ml</p>


                <section class="follow">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </section>
            </article>


            

            <!-- Right -->
            <article class="content_right">

                <section class="formBox">
                    <form action="">

                        <h2>Liên Hệ Với Chúng Tôi</h2>

                        <!-- Name -->
                        <section class="inputBox">
                            <input type="text" required="required">
                            <span>Họ và Tên</span>
                        </section>

                        <!-- Email -->
                        <section class="inputBox">
                            <input type="email" required="required">
                            <span>Email</span>
                        </section>

                        <!-- Phone -->
                        <section class="inputBox">
                            <input type="tel" required="required">
                            <span>Số điện thoại</span>
                        </section>

                        <!-- How can help you ? -->
                        <section class="inputBox">
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <span>Chúng tôi có thể giúp được gì cho bạn ...</span>
                        </section>

                        <!-- Submit -->
                        <section class="inputBox">
                            <input type="submit" value="Gửi" style="font-family:'Courier New', Courier, monospace ;">
                        </section>

                    </form>
                </section>

                <section class="imgBox"></section>


            </article>
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
                        <section class="img"><img src="./img/White_and_Black_Panda_Cute_T_Shirt-removebg-preview.png"
                                alt="" width="100%"></section>

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
                            <section><img
                                    src="./img/png-clipart-google-play-apple-app-store-android-lecture-schedule-text-label-removebg-preview.png"
                                    alt="" width="150px"></section>
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

    <script src="./js/lienhe.js"></script>
</body>

</html>