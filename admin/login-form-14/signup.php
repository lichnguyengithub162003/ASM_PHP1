<?php
session_start();
include ("../config.php");



if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
	$address = $_POST['address'];
	$tel = $_POST['tel'];


    $sql_signup = mysqli_query($mysqli, "INSERT INTO tbl_user(username, email, password, address, tel) VALUE('".$username."', '".$email."', '".$password."', '".$address."', '".$tel."') ");

    // Nếu đăng ký thành công
    if ($sql_signup) {
        echo '<script> alert("Đăng ký thành công !"); </script>';

		$_SESSION['signup'] = $username;	
		$_SESSION['email'] = $email;	
		$_SESSION['id_user'] = mysqli_insert_id($mysqli);  //Lấy id mới nhất của khách hàng khi khách hàng đăng ký thành công
        
		header("Location: signin_user.php");
    }else{
        echo '<script> alert("Tài khoản hoặc mật khẩu không hợp lệ !"); </script>';
    }
}
?>






<!doctype html>
<html lang="en">

<head>
	<title>Sign Up</title>
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
						<div class="img" style="background-image: url(images/bg-2.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="font-weight: bold;">Sign Up</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>

							
							<form action="" class="signin-form" method="post">
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input name="username" type="text" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Email</label>
									<input name="email" type="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Address</label>
									<input name="address" type="text" class="form-control" placeholder="Address" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Tel</label>
									<input name="tel" type="tel" class="form-control" placeholder="Tel" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input name="password" type="password" class="form-control" placeholder="Password" required>
								</div>								
								<div class="form-group">
									<button name="signup" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
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
							<p class="text-center">Not a member? <a data-toggle="tab" href="signin_user.php?quanly=signin_user">Sign In</a></p>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>