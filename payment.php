<!-- ************************************ Header ******************************* -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/cart.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
</head>

<body>
    <header>
        <div class="logo"><img src="./img/screenshot_1658678333-removebg-preview.png" alt=""></div>

        <div class="menu">
            <li><a href="">TRANG CHỦ</a></li>
            <li><a href="">GIỚI THIỆU</a></li>

            <li><a href="">SẢN PHẨM</a>
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




    <!-- ************************************* Payment ******************************** -->
    <section class="payment">

        <div class="container">
            <div class="payment-top-wrap">
                <div class="payment-top">
                    <div class="payment-top-delivery payment-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="payment-top-adress payment-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="payment-top-payment payment-top-item">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="payment-content row">

                <!-- Left -->
                <div class="payment-content-left">

                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery-item">
                            <input type="radio" checked>
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>

                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                        
                        <!--  -->
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio" checked>
                            <label for="">Thanh toán bằng thẻ tín dụng (OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-delivery-item-img">
                            <img src="./img/visa4.png" alt="" width="100">
                        </div>

                        <!--  -->
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán bằng thẻ ATM (OnePay)</label>
                        </div>
                        <div class="payment-content-left-method-delivery-item-img">
                            <img src="./img/visa4.png" alt="" width="100">
                        </div>

                        <!--  -->
                        <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán bằng Momo</label>
                        </div>
                        <div class="payment-content-left-method-delivery-item-img">
                            <img src="./img/momo.png" alt="" width="70">
                        </div>

                         <!--  -->
                         <div class="payment-content-left-method-payment-item">
                            <input name="method-payment" type="radio">
                            <label for="">Thanh toán tận nơi</label>
                        </div>
                    </div>
                </div>


                <!-- Right -->
                <div class="payment-content-right">

                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng">
                        <button><i class="fa-solid fa-check"></i></button>
                    </div>

                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fa-solid fa-check"></i></button>
                    </div>

                    <div class="payment-content-right-mnv">
                        <select name="" id="">
                            <option value="">Chọn mã nhân viên thân thiết</option>
                            <option value="">DDR3</option>
                            <option value="">DDR4</option>
                            <option value="">DDR5</option>
                            <option value="">DDR6</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="payment-content-right-payment">
                <a href=""><button>TIẾP TỤC THANH TOÁN</button></a>
            </div>
        </div>
    </section>




    <!-- ************************************* Footer ****************************** -->

    <?php include "layouts/footer.php"; ?>