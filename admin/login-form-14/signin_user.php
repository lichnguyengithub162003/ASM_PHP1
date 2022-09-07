<?php
session_start();
include("../config.php");

if (isset($_POST['signin_user'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	// Sau mỗi câu lệnh phải có câu truy vấn
	$sql = "SELECT * FROM tbl_user WHERE username='".$username."' AND password='".$password."' LIMIT 1 ";
	$row = mysqli_query($mysqli, $sql);

	// Đếm số dữ liệu
	$count = mysqli_num_rows($row);

	if ($count > 0) {  //Có từ 1 ng đăng nhập
		$row_data = mysqli_fetch_array($row);
		$_SESSION['signin_user'] = $row_data['username'];
		$_SESSION['email'] = $row_data['email'];
		$_SESSION['id_user'] = $row_data['id_user'];
		// echo '<script> alert("Đăng nhập thành công!"); </script>';

		header("Location: ../../index.php");
	} else {
		echo '<script> alert("Tài khoản hoặc mật khẩu không đúng!"); </script>';
		// header("Location: login.php");
	}
}
?>


<!doctype html>
<html lang="en">

<head>
	<title>Sign In User</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section" style="background-image: url(images/Liberty\ Library\ Facebook\ Cover.png); width: 100%; height: 100%;">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/bg-1.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="font-weight: bold;">Sign In User</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>






							<form action="" class="signin-form" method="POST" autocomplete="off">
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input name="username" type="text" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input name="password" type="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button name="signin_user" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
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
							</form>
							<p class="text-center">Not a member? <a href="./signup.php" data-toggle="tab">Sign Up</a></p>
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