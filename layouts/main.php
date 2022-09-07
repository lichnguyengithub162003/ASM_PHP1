<div id="main">
    <?php
    include("header.php");
    ?>
    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])) {
           $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if ($tam== 'danhmucsanpham') {
            include("layouts/danhmuc.php");
        }elseif($tam=='giohang') {
            include("../cart.php");
        }elseif($tam=='lienhe') {
            include("lienhe.php");
        }elseif($tam=='sanpham') {
            include("../bogia.php");
        // }elseif($tam=='camon') {
        //     include("../payment.php");
        }elseif($tam=='timkiem') {
            include("../search.php");
        }elseif($tam=='signup') {
            include("../admin/login-form-14/signup.php");
        }elseif($tam=='signin_user') {
            include("../admin/login-form-14/signin_user.php");    
        }elseif($tam=='delivery') {
            include("../delivery.php");
        }elseif($tam=='thaydoimatkhau') {
            include("../admin/pages/tables/thaydoimatkhau.php");
        }else{
            include("../sp.php");
        }

        ?>

    </div>
</div>