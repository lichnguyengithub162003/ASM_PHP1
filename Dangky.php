<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="./css/Dangky.css" rel="stylesheet"/>
   
   

</head>
<body>

    <div class="login-box">
        <h2>Sign up</h2>
        <form>

            <!--  -->
            <div class="form-control error">
                <input id="username" type="text" name="" required>
                <label>Username</label>
                <small></small>
                <span></span>
            </div>

            <!--  -->
            <div class="form-control">
                <input id="email" type="email" name=""  required>
                <label>Email</label>
                <span></span>
            </div>

            <!--  -->
            <div class="form-control">
                <input id="password" type="password" name=""  required>
                <label>Password</label>
                <span></span>
            </div>

            <!--  -->
            <div class="form-control">
                <input id="tel" type="tel" name="" required>
                <label>Phone number</label>
                <span></span>
            </div>


            <a href="#" class="a">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit">Sign up</button> 
            </a>

            <div class="signup-link">
                Not a member? <a href="#">Signup</a>
            </div>
           
        </form>
    </div>
    <script src="./js/dangky.js"></script>
</body>
</html>