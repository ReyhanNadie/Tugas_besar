<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v16/images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./Login V16_files/util.css">
	<link rel="stylesheet" type="text/css" href="./Login V16_files/main.css">
<!--===============================================================================================-->
</head>

<?php

if (isset($_POST["username"])){
    $conn = new mysqli("localhost", "root", "", "tugbes");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
    $hasil= mysqli_query($conn,"INSERT INTO formlogin(username,password) value('$username','$password')");
	header('location:login.php');	
}

?>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url(&#39;images/bg-01.jpg&#39;);">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					REGISTER ACCOUNT
				</span>
				<form action="" class="login100-form validate-form p-b-33 p-t-5" method="post">

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							REGISTRATION
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>