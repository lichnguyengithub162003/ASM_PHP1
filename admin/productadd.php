<?php
// include "header.php";
// include "index.php";
include "class/product_class.php";
?>

<?php
$product = new product;  //Gọi hàm brand bên brand_class qua 

// Nếu như có hành động post thì...
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert_product = $product->insert_product($_POST, $_FILES);
}
?>



<!-- ----------------------------- RIGHT ------------------------------------- -->
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm sản phẩm</h1>

        <form action="" method="post" enctype="multipart/form-data">

            <!-- Nhập tên sản phẩm -->
            <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
            <input name="product_name" type="text" placeholder="Tên sản phẩm" required>


            <!-- Chọn danh mục -->
            <label for="">Chọn danh mục <span style="color: red;">*</span></label>
            <select name="cartegory_id" id="">
                <option value="">-- Chọn --</option>

                <!-- Hàm gọi csdl -->
                <?php
                $show_cartegory = $product->show_cartegory();
                if ($show_cartegory) {
                    while ($result = $show_cartegory->fetch_assoc()) {
                ?>

                        <!-- Đổ csdl vào chỗ này -->
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>

                <?php }
                } ?>
            </select>


            <!-- Chọn loại sản phẩm -->
            <label for="">Chọn loại sản phẩm<span style="color: red;">*</span></label>
            <select name="brand_id" id="">
                <option value="">-- Chọn --</option>

                <!-- Hàm gọi csdl -->
                <?php
                $show_brand = $product->show_brand();
                if ($show_brand) {
                    while ($result = $show_brand->fetch_assoc()) {
                ?>

                        <!-- Đổ csdl vào chỗ này -->
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>

                <?php }
                } ?>
            </select>


            <!-- Giá sản phẩm -->
            <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
            <input name="product_price" type="text" required>


            <!-- Giá khuyến mãi -->
            <label for="">Giá khuyến mãi<span style="color: red;">*</span></label>
            <input name="product_price_new" type="text" required>


            <!-- Mô tả -->
            <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
            <textarea name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả"></textarea>


            <!-- Ảnh -->
            <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
            <span style="color: red;"><?php if(isset($insert_product)){
                           echo $insert_product;
            } ?></span>
            <input name="product_img" type="file" required>


            <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
            <input name="product_img_desc[]" multiple type="file" required>


            <!-- Submit -->
            <button type="submit">Thêm</button>

        </form>
    </div>
</div>

</section>
</body>



<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
</script>



</html>