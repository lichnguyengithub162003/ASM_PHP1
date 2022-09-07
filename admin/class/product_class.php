<?php include "../../database.php"; ?>

<?php
class product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    // Đổ dữ liệu ra từ bảng cartegory
    public function show_cartegory()
    {
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }



    // Đổ dữ liệu ra từ bảng brand
    public function show_brand()
    {
        //Lấy carteogry_name
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name 
                  FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
                  ORDER BY tbl_brand.brand_id DESC";

        $result = $this->db->select($query);
        return $result;
    }





    public function insert_product()
    {
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];


        $filetarget = basename($_FILES['product_img']['name']);   //Lấy tên file
        $filetype = strtolower(pathinfo($product_img, PATHINFO_EXTENSION));
        $filesize = $_FILES['product_img']['size'];

        if (file_exists("uploads/$filetarget")) {    //Nếu tồn tại cái tên file là $filetarget
            $alert = "File đã tồn tại";
            return $alert;
        } else {

            if ($filetype != "jpg"  &&  $filetype != "png"  &&  $filetype != "jpeg"  &&  $filetype != "gif") {
                $alert = "Chỉ chọn file jpg, png, jpeg, gif";
                return $alert;
            } else {

                if ($filesize > 1000000) {
                    $alert = "File không được lớn hơn 1MB";
                    return $alert;
                } else {
                    move_uploaded_file($_FILES['product_img']['tmp_name'], "../../uploads/" . $_FILES['product_img']['name']);
                    $query = "INSERT INTO tbl_product (product_name,
                                           cartegory_id,
                                           brand_id,
                                           product_price,
                                           product_price_new,
                                           product_desc,
                                           product_img)   
                                   VALUES ('$product_name', 
                                           '$cartegory_id',
                                           '$brand_id', 
                                           '$product_price',
                                           '$product_price_new', 
                                           '$product_desc', 
                                           '$product_img')";
                    $result = $this->db->insert($query);

                    if ($result) {

                        // Lấy 1 phần tử mới nhất của product_id
                        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                        $result = $this->db->select($query)->fetch_assoc();  //Đổ ra dữ liệu dạng mảng
                        $product_id = $result['product_id'];


                        // Do mảng có nhiều ảnh nên phải dùng vòng lặp
                        $filename = $_FILES['product_img_desc']['name'];
                        $filetmp = $_FILES['product_img_desc']['tmp_name'];

                        foreach ($filename as $key => $value) {
                            move_uploaded_file($filetmp[$key], "../../uploads/" . $value);
                            $query = "INSERT INTO tbl_product_img_desc (product_id, product_img_desc) VALUES ('$product_id','$value')";
                            $result = $this->db->insert($query);
                        }
                    }
                }
            }
        }
        header("Location:../../pages/tables/productlist1.php");
        // return $result;
    }




    public function show_product()
    {
        //Lấy carteogry_name
        $query = "SELECT tbl_product.*, tbl_cartegory.cartegory_name, tbl_brand.brand_name
                  FROM ((tbl_product INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id)
                                     INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id)
                  ORDER BY tbl_product.product_id DESC";

        $result = $this->db->select($query);
        return $result;
    }



    public function get_product($product_id)
    {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this->db->select($query);
        return $result;
    }







    public function update_product($product_name, $cartegory_id, $brand_id, $product_price, $product_price_new, $product_desc, $product_img, $product_id)
    {
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];


        $filetarget = basename($_FILES['product_img']['name']);   //Lấy tên file
        $filetype = strtolower(pathinfo($product_img, PATHINFO_EXTENSION));
        $filesize = $_FILES['product_img']['size'];

        if (file_exists("uploads/$filetarget")) {    //Nếu tồn tại cái tên file là $filetarget
            $alert = "File đã tồn tại";
            return $alert;
        } else {

            if ($filetype != "jpg"  &&  $filetype != "png"  &&  $filetype != "jpeg"  &&  $filetype != "gif") {
                $alert = "Chỉ chọn file jpg, png, jpeg, gif";
                return $alert;
            } else {

                if ($filesize > 1000000) {
                    $alert = "File không được lớn hơn 1MB";
                    return $alert;
                } else {
                    move_uploaded_file($_FILES['product_img']['tmp_name'], "../../uploads/" . $_FILES['product_img']['name']);
                    $query = "UPDATE tbl_product SET product_name = '$product_name', cartegory_id = '$cartegory_id', brand_id = '$brand_id', product_price = '$product_price', product_price_new = '$product_price_new', product_desc = '$product_desc', product_img = '$product_img' 
                              WHERE product_id = '$product_id' ";

                    $result = $this->db->update($query);

                    if ($result) {

                        // Lấy 1 phần tử mới nhất của product_id
                        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                        $result = $this->db->select($query)->fetch_assoc();  //Đổ ra dữ liệu dạng mảng
                        $product_id = $result['product_id'];


                        // Do mảng có nhiều ảnh nên phải dùng vòng lặp
                        $filename = $_FILES['product_img_desc']['name'];
                        $filetmp = $_FILES['product_img_desc']['tmp_name'];

                        foreach ($filename as $key => $value) {
                            move_uploaded_file($filetmp[$key], "../../uploads/" . $value);
                            $query = "INSERT INTO tbl_product_img_desc (product_id, product_img_desc) VALUES ('$product_id','$value')";
                            $result = $this->db->update($query);
                        }
                    }
                }
            }
        }
        header("Location:../../pages/tables/productlist1.php");
        // return $result;
    }






    public function delete_product($product_id)
    {
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
        $result = $this->db->delete($query);
        header('Location:../../pages/tables/productlist1.php');
        return $result;
    }



    
}
