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




    <!-- ************************************* Delivery ******************************** -->
    <section class="delivery">
        <div class="container">

            <div class="delivery-top-wrap">
                <div class="delivery-top">
                    <div class="delivery-top-delivery delivery-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="delivery-top-adress delivery-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                </div>
            </div>

        </div>


        <div class="container">
            <div class="delivery-content row">

                <!-- *********** Left **************** -->
                <div class="delivery-content-left">

                    <!--  -->
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <p>Đăng nhập (Nếu bạn đã có tài khoản của PANDA)</p>
                    </div>

                    <!--  -->
                    <div class="delivery-content-left-khachle row">
                        <input type="radio" name="loaikhach" checked>
                        <p><span style="font-weight: bold; font-size:14px;">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>

                    <!--  -->
                    <div class="delivery-content-left-dangky row">
                        <input type="radio" name="loaikhach">
                        <p><span style="font-weight: bold; font-size:14px;">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p>
                    </div>

                    <!--  -->
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="delivery-content-left-input-top-item">
                            <label for="">Tỉnh/TP <span style="color: red;">*</span></label>
                            <input type="text" name="" id="">
                        </div>

                        <div class="delivery-content-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                            <input type="text" name="" id="">
                        </div>
                    </div>



                    <!--  -->
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color: red;">*</span></label>
                        <input type="text" name="" id="">
                    </div>

                    <div class="delivery-content-left-button row">
                        <a href="cart.php" style="color: rgb(231, 191, 14);">
                            <span>&#171;</span>
                            <p>Quay lại giỏ hàng</p>
                        </a>

                        <a href="#"><button style="font-weight: bold;" name="thanhtoan">THANH TOÁN VÀ GIAO HÀNG</button></a>
                    </div>
                </div>



                <!-- *********** Right *************** -->
                <div class="delivery-content-right">
                    <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>

                        <tr>
                            <td>Cho tôi xin một vé đi tuổi thơ</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td>
                                <p>52.000 <sup>đ</sup></p>
                            </td>
                        </tr>

                        <tr>
                            <td>Mắt biếc</td>
                            <td>-30%</td>
                            <td>1</td>
                            <td>
                                <p>65.000 <sup>đ</sup></p>
                            </td>
                        </tr>

                     <tr class="result">
                        <tr>
                            <td colspan="3" style="font-weight: bold;">Tổng</td>
                            <td style="font-weight: bold;">
                                <p>65.000 <sup>đ</sup></p>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" style="font-weight: bold;">Thuế VAT</td>
                            <td style="font-weight: bold;">
                                <p>5.000 <sup>đ</sup></p>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" style="font-weight: bold;">Tổng tiền hàng</td>
                            <td style="font-weight: bold;">
                                <p>71.000 <sup>đ</sup></p>
                            </td>
                        </tr>
                    </tr>
                    </table>
                </div>
            </div>

        </div>
    </section>





    <!-- ************************************* Footer ****************************** -->

    <?php include "layouts/footer.php"; ?>