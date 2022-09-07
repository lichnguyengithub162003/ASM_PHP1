<?php
include "admin/config.php";
$sql_danhmuc = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>


<!-- Sản phẩm từng danh mục -->
<?php
// include "admin/config.php";
$sql_pro = "SELECT * FROM tbl_product
                WHERE tbl_product.cartegory_id = '$_GET[id]'
                ORDER BY product_id DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);

//GET cartegory_name
$sql_cate = "SELECT * FROM tbl_cartegory WHERE tbl_cartegory.cartegory_id='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);
?>

<!-- <h4>Danh mục: <?php echo $row_title['cartegory_name'] ?></h4> -->


<ul class="products">
<?php while ($row_pro = mysqli_fetch_array($query_pro)) { ?>
                                    <li>
                                        <section class="product-item">
                                            <section class="product-top">
                                                <a href="" class="product-thumb">
                                                    <img src="admin/uploads/<?php echo $row_pro['product_img'] ?>" alt="" width="100%">
                                                </a>

                                                <a href="sp.php?quanly=sanpham&id=<?php echo $row_pro['product_id'] ?>" class="buy-now">Mua ngay</a>
                                            </section>

                                            <section class="product-info">
                                                <a href="#" class="product-cat"><?php echo $row_pro['cartegory_name'] ?></a>
                                                <a href="#" class="product-name"><?php echo $row_pro['product_name'] ?></a>
                                                <i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i><i class="fa-solid fa-star" style="color: orange;"></i> | Đã bán 1000+
                                                <section class="product-price"><?php echo number_format($row_pro['product_price'], 0, ',', '.') . '<sup>đ</sup>' ?></section>
                                            </section>
                                        </section>
                                    </li>
                                <?php } ?>
</ul>
