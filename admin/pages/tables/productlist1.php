<?php
// include "header.php";
// include "index.php";
include "../../class/product_class.php";
?>

<?php
$product = new product;
$show_product = $product->show_product();
?>


<!-- Phân trang -->
<?php
if (isset($_GET['page'])) {
  $page1 = $_GET['page'];
} else {
  $page1 = 1;
}

if ($page1 == '' || $page1 == 1) {
  $begin = 0;
} else {
  $begin = ($page1 * 3) - 3;
}
$sql_pro = "SELECT * FROM tbl_product,tbl_brand,tbl_cartegory
            WHERE tbl_product.brand_id = tbl_brand.brand_id
            AND tbl_product.cartegory_id = tbl_cartegory.cartegory_id
            ORDER BY tbl_product.product_id DESC LIMIT $begin,3";
$query_pro = mysqli_query($mysqli, $sql_pro);


?>


<!-- Search -->
<!-- </*?php
if (isset($_POST['submit'])) {
  $search = $_POST['search'];
}
$sql_pro = "SELECT * FROM tbl_product
            WHERE tbl_product.product_name LIKE '%".$search."%' ";
            $query_pro = mysqli_query($mysqli,$sql_pro);
?> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Product list</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../css/style1.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../img/P.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../../index.php">PANDA</a>
        <a class="sidebar-brand brand-logo-mini" href="../../index.php">P</a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="../../img/faces/face15.gif" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Floppy</h5>
                <span>Administrator</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <!-- <i class="mdi mdi-settings text-primary"></i> -->
                    <i class="fa-solid fa-gear text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <!-- <i class="mdi mdi-onepassword  text-info"></i> -->
                    <i class="fa-solid fa-unlock text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <!-- <i class="mdi mdi-calendar-today text-success"></i> -->
                    <i class="fa-solid fa-calendar-day text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../../index.php">
            <span class="menu-icon">
              <!-- <i class="mdi mdi-speedometer"></i> -->
              <i><span class="iconify" data-icon="mdi:speedometer"></span></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.php">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.php">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.php">Typography</a></li>
              </ul>
            </div>
          </li> -->
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <!-- <i class="mdi mdi-table-large"></i> -->
              <i><span class="iconify" data-icon="ci:list-plus"></span></i>
            </span>
            <span class="menu-title">List
              <i><span class="iconify" data-icon="ep:arrow-down" style="margin-left: 100px;"></span></i>
            </span>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="cartegorylist1.php"> Category List </a></li>
              <li class="nav-item"> <a class="nav-link" href="brandlist1.php"> Brand List </a></li>
              <li class="nav-item"> <a class="nav-link" href="productlist1.php"> Product List </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
            <span class="menu-icon">
              <!-- <i class="mdi mdi-table-large"></i> -->
              <i><span class="iconify" data-icon="ci:list-plus"></span></i>
            </span>
            <span class="menu-title">Add
              <i><span class="iconify" data-icon="ep:arrow-down" style="margin-left: 98px;"></span></i>
            </span>
          </a>
          <div class="collapse" id="ui-basic1">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../forms/cartegoryadd1.php"> Category Add </a></li>
              <li class="nav-item"> <a class="nav-link" href="../forms/brandadd1.php"> Brand Add </a></li>
              <li class="nav-item"> <a class="nav-link" href="../forms/productadd1.php"> Product Add </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
            <span class="menu-icon">
              <!-- <i class="mdi mdi-table-large"></i> -->
              <i><span class="iconify" data-icon="bxs:user-plus"></span></i>
            </span>
            <span class="menu-title">Customers
              <i><span class="iconify" data-icon="ep:arrow-down" style="margin-left: 53px;"></span></i>
            </span>
          </a>
          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/tables/customers.php">Dropdowns</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../../pages/charts/chartjs.php">
            <span class="menu-icon">
              <!-- <i class="mdi mdi-chart-bar"></i> -->
              <i><span class="iconify" data-icon="ant-design:area-chart-outlined"></span></i>
            </span>
            <span class="menu-title">Charts</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <!-- <i class="mdi mdi-security"></i> -->
              <i><span class="iconify" data-icon="ic:outline-security"></span></i>
            </span>
            <span class="menu-title">User Pages
              <!-- <i class="menu-arrow"></i> -->
              <i><span class="iconify" data-icon="ep:arrow-down" style="margin-left: 48px;"></span></i>
            </span>

          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <!-- <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.php"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.php"> 500 </a></li> -->
              <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.php"> Login </a></li>
              <!-- <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.php"> Register </a></li> -->
            </ul>
          </div>
        </li>
        <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.php">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.php -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="../../index.php">PANDA</a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <!-- <span class="mdi mdi-menu"></span> -->
            <i class="fa-solid fa-bars"></i>
          </button>


          <!-- Form Search -->


          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search products">
              </form>
            </li>
          </ul>







          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                <h6 class="p-3 mb-0">Projects</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-file-outline text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Software Development</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-web text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">UI Development</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-layers text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Software Testing</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">See all projects</p>
              </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <!-- <i class="mdi mdi-view-grid"></i> -->
                <i class="fa-solid fa-grid-2 mdi-view-grid"></i>
              </a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <!-- <i class="mdi mdi-email"></i> -->
                <i class="fa-solid fa-envelope"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../img/faces/face1.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../img/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../img/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">4 new messages</p>
              </div>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <!-- <i class="mdi mdi-bell"></i> -->
                <i class="fa-solid fa-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Event today</p>
                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-link-variant text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Launch Admin</p>
                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">See all notifications</p>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="../../img/faces/face15.gif" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Floppy</p>
                  <!-- <i class="mdi mdi-menu-down d-none d-sm-block"></i> -->
                  <i class="fa-solid fa-sort-down" style="margin: 0 15px 5px 8px; font-size:12px;"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <!-- <i class="mdi mdi-settings text-success"></i> -->
                      <i class="fa-solid fa-gear text-success" style="font-size: 14px;"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <!-- <i class="mdi mdi-logout text-danger"></i> -->
                      <i class="fa-solid fa-right-from-bracket text-danger" style="font-size: 14px;"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">Advanced settings</p>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Basic Tables </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
              </ol>
            </nav>
          </div>
          <div class="row">

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card bezel">
                <div class="card-body">
                  <h4 class="card-title">List Of Products</h4>
                  <!-- <p class="card-description"> Add class <code>.table-hover</code></p> -->
                  <button class="badge badge-info"><a href="../forms/productadd1.php" style="direction: none; color:#fff;">Add to products</a></button>


                  <div class="table-responsive">


                    <table class="table table-hover">
                      <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Id</th>
                          <th>Category</th>
                          <th>Brand</th>
                          <th>Product name</th>
                          <th>Price</th>
                          <th>Sales</th>
                          <th>Describe</th>
                          <th>Image</th>
                          <th>Custom</th>
                        </tr>
                      </thead>


                      <?php
                      if ($show_product) {
                        $i = 0;
                        while ($result = $show_product->fetch_assoc()) {
                          $i++;


                          while ($result = mysqli_fetch_array($query_pro)) {
                      ?>


                            <tbody>
                              <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $result['product_id'] ?></td>
                                <td><?php echo $result['cartegory_name'] ?></td>
                                <td><?php echo $result['brand_name'] ?></td>
                                <td><?php echo $result['product_name'] ?></td>
                                <td><?php echo number_format($result['product_price'],0,',','.').'<sup>đ</sup>' ?></td>
                                <td><?php echo number_format($result['product_price_new'],0,',','.').'<sup>đ</sup>' ?></td>
                                <td><?php echo $result['product_desc'] ?></td>

                                <td> <img width="50" src="../../uploads/<?php echo $result['product_img'] ?>"></td>

                                <td><button class="badge badge-danger"> <a href="product_delete.php?product_id=<?php echo $result['product_id'] ?>">Delete</a> </button>
                                  <button class="badge badge-success"> <a href="product_update.php?product_id=<?php echo $result['product_id'] ?>">Update</a></button>
                                </td>
                              </tr>



                        <?php }
                        }
                      } ?>



                            </tbody>


                            <tfoot>

                              <?php
                              $sql_page = mysqli_query($mysqli, "SELECT * FROM tbl_product");
                              $row_count = mysqli_num_rows($sql_page);
                              $page =  ceil($row_count / 3);
                              ?>



                              <tr class="list_page">
                                <?php for ($i = 1; $i <= $page; $i++) { ?>

                                  <td><a <?php
                                          if ($i == $page) {
                                            echo 'style="background:gray"';
                                          } else {
                                            echo '';
                                          } ?>>
                                      <a href="productlist1.php?page=<?php echo $i ?>"> <?php echo $i ?> </a></td>

                                <?php } ?>

                              </tr>

                            </tfoot>

                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.php -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../../js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../../js/off-canvas.js"></script>
      <script src="../../js/hoverable-collapse.js"></script>
      <script src="../../js/misc.js"></script>
      <script src="../../js/settings.js"></script>
      <script src="../../js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <!-- End custom js for this page -->
      <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>

</html>