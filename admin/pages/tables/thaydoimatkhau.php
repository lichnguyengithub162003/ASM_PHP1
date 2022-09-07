<?php
include "../../config.php";

if (isset($_POST['doimatkhau'])) {

	$username = $_POST['username'];
	$matkhau_cu = md5($_POST['password_cu']);
	$matkhau_moi = md5($_POST['password_moi']);

    $sql = "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password = '".$matkhau_cu."'  LIMIT 1 ";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);

    if($count>0){
        $sql_update = mysqli_query($mysqli, "UPDATE tbl_admin SET password = '".$matkhau_moi."'   ");
        echo '<script> alert("Thay đổi mật khẩu thành công!"); </script>';
    }else{
        echo '<script> alert("Tài khoản hoặc mật khẩu cũ không đúng !"); </script>';
    }
}

?>







<!doctype html>
<html lang="en">

<head>
	<title>Change Password Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../../login-form-14/css/style.css">

</head>

<body>
	<section class="ftco-section" style="background-image: url(../../login-form-14/images/LibertyLibraryFacebookCover.png); width: 100%; height: 100%;">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(../../login-form-14/images/bg-1.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="font-weight: bold;">Change Password Admin</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>






							<form action="" class="signin-form" method="POST">
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input name="username" type="text" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Old password</label>
									<input name="password_cu" type="text" class="form-control" placeholder="Password" required>
								</div>
                                <div class="form-group mb-3">
									<label class="label" for="password">New password</label>
									<input name="password_moi" type="text" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button name="doimatkhau" type="submit" class="form-control btn btn-primary rounded submit px-3">Change password</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div>
								<p class="text-center">Not a member? <a data-toggle="tab" href="login-form-14/signup.php">Sign Up</a></p>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>