<?php
session_start();
include ("admin/config.php");
// require('mail/sendmail.php');
require('carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');


// if (isset($_POST['thanhtoan'])){
    $id_user = $_SESSION['id_user'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_user, code_cart, cart_status, cart_date) VALUE('".$id_user."', '".$code_order."', 1, '".$now."')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if ($cart_query){
        // Thêm giỏ hàng chi tiết
        foreach($_SESSION['cart'] as $key => $value){
            $product_id = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO tbl_cart_details(product_id, code_cart, soluongmua) VALUE('".$product_id."', '".$code_order."', '".$soluong."')";

            mysqli_query($mysqli, $insert_order_details);
        }
        // $tieude = "Đặt hàng Panda Store thành công!";
        // $noidung = "<h4>
        //                 <p>Cảm ơn quý khách đã đặt hàng của shop chúng tôi với mã đơn hàng: ".$code_order."</p>
        //             </h4>";
        // foreach($_SESSION['cart'] as $key => $val){
        //     $noidung = "<ul>
        //                     <li>".$val['product_name']."</li>
        //                     <li>".$val['product_id']."</li>
        //                     <li>".number_format($val['product_price'],0,',','.')." '<span>đ</span>' </li>
        //                     <li>".$val['soluong']."</li>
        //                 </ul>";
        // }
        
        // $maildathang = $_SESSION['email'];
        // $mail = new Mailer();
        // $mail->dathangmail($tieude,$noidung,$maildathang);
    }
    unset($_SESSION['cart']);
    header("Location: lichsudonhang.php");
// }



?>









<!-- ************************************ Header ******************************* -->
