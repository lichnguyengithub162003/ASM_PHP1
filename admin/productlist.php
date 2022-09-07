<?php
// include "header.php";
// include "index1.php";
include "./class/product_class.php";
?>


<?php

$product = new product;
$show_product = $product->show_product();

?>

<!-- ----------------------------- RIGHT ------------------------------------- -->
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách Loại sản phẩm</h1>

        <table>
            <tr>
                <th>STT</th>
                <th>Danh mục</th>
                <th>Loại sản phẩm</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Khuyến mãi</th>
                <th>Mô tả</th>
                <th>Ảnh sản phẩm</th>
            </tr>


            <?php
                if ($show_product) {
                    $i = 0;
                    while ($result = $show_product->fetch_assoc()) {
                        $i++;
            ?>



            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['product_id'] ?></td>
                <td><?php echo $result['cartegory_name'] ?></td>
                <td><?php echo $result['brand_name'] ?></td>
                <td><?php echo $result['product_name'] ?></td>
                <td><?php echo $result['product_price'] ?></td>
                <td><?php echo $result['product_price_new'] ?></td>
                <td><?php echo $result['product_desc'] ?></td>
                <td> <img width="100" src="/uploads/<?php echo $show_product['product_img'] ?>"> </td>
                <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a> | <a href="productdelete.php?product_id=<?php echo $result['product_id'] ?>">Xóa</a></td>
            </tr>



            <?php
                }}
            ?>


        </table>
    </div>
</div>

</section>
</body>

</html>