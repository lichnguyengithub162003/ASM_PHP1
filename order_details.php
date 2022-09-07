<?php
include "admin/config.php";

$sql_lietke_dh = "SELECT * FROM tbl_cart_details, tbl_product
                  WHERE tbl_cart_details.product_id=tbl_product.product_id
                  AND tbl_cart_details.code_cart='$_GET[code]'
                  ORDER BY tbl_cart_details.id_cart_details DESC ";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
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


    <div class="container" style="margin: 50px auto; width:70%; "> 
            <div><h1 style="margin:50px auto;">LỊCH SỬ CHI TIẾT ĐƠN HÀNG</h1></div>
            <div class="cart-content row">
            

                <!-- ------------- Left -------------- -->
                <div class="cart-content-left">
                    <table>
                      <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Id Order</th>                     
                          <th>Product Name</th>
                          <th>Amount</th>
                          <th>Price</th>
                          <th>Into Money</th>
                        </tr>
                      </thead>


                      <!-- <*?php
                      if ($show_order) {
                        $i = 0;
                        while ($result = $show_order->fetch_assoc()) {
                          $i++;
                      ?> -->

                      <?php
                      $i = 0;
                      $tongtien = 0;
                      while($row = mysqli_fetch_array($query_lietke_dh)){
                        $i++;
                        $thanhtien = $row['product_price']*$row['soluongmua'];
                        $tongtien += $thanhtien ?>


                          <tbody>
                            <tr>
                              <td><?php echo $i ?></td>
                              <td><?php echo $row['code_cart'] ?></td>
                              <td><?php echo $row['product_name'] ?></td>
                              <td><?php echo $row['soluongmua'] ?></td>
                              <td><?php echo number_format($row['product_price'],0,',','.').'<sup>đ</sup>' ?></td>
                              <td><?php echo number_format(($row['product_price']*$row['soluongmua']),0,',','.').'<sup>đ</sup>' ?></td>
                              
                              

                              <!-- <td> <img width="50" src="../../uploads/</*?php echo $result['product_img'] ?>"></td> -->

                              <td>
                                  <!-- <button class="badge badge-warning"> <a href="">Detail</a> </button>
                                  <button class="badge badge-success"> <a href="order_update.php?order_id=<?php echo $result['order_id'] ?>">Update</a></button> -->
                              </td>
                            </tr>
                            <?php } ?>


                            <tfoot>
                            <td colspan="7">
                              Total Price: <?php echo number_format($tongtien,0,',','.').'<sup>đ</sup>' ?>
                              </td>
                            </tfoot>


                        


                          </tbody>
                          </table>
                </div>


            </div>

            
      <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>

</html>