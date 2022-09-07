<?php
session_start(); 
include "admin/config.php";

$id_user = $_SESSION['id_user'];
$sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_user
                  WHERE tbl_cart.id_user=tbl_user.id_user
                  AND tbl_cart.id_user='$id_user'
                  ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);



require 'carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

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

            <div class="cart-top-wrap">
                <!-- <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="cart-top-adress cart-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    
                </div> -->
                <h1 style="margin:0 0px 100px 0;">LỊCH SỬ ĐƠN HÀNG</h1>
            </div>

        </div>

        

        <div class="container">

            <div class="cart-content row">


                <!-- ------------- Left -------------- -->
                <div class="cart-content-left">
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>                      
                            <th>Tình trạng</th>
                            <th>Ngày đặt</th>
                            <th>Quản lý</th>
                            <!-- <th>In</th> -->
                        </tr>

                        <!-- --------------------------- -->
                        <?php 
                            $i = 0;
                            while($row = mysqli_fetch_array($query_lietke_dh)){
                                $i++; ?>

                                <!-- --------------------------- -->

                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $row['code_cart'] ?></td>                          
                                    <td><?php echo $row['username'] ?></td>                          
                                    <td><?php echo $row['address'] ?></td>                          
                                    <td><?php echo $row['email'] ?></td>                          
                                    <td><?php echo $row['tel'] ?></td>                                                  
                                    <td>
                                        <?php
                                        if($row['cart_status']==1){
                                            echo '<a href="admin/class/order_class.php?code='.$row['code_cart'].' ">Đơn hàng mới</a> ';
                                        }else{
                                            echo 'Đang giao';
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $row['cart_date'] ?>
                                    <td><a href="order_details.php?&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a></td>
                                    <!-- <td><a href="">In đơn hàng</a></td> -->
                                   
                                </tr>
                                <!-- --------------------------- -->


                            <?php } ?>
                             

                    </table>
                </div>


            </div>
        </div>


        
    </section>





    <!-- ************************************* Footer ****************************** -->

    <?php include "layouts/footer.php"; ?>