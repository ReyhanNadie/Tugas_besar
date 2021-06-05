<!DOCTYPE html>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v16/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<meta name="robots" content="noindex, follow">
</head>
<body>
	<?php
 
 session_start();
 if (isset($_GET['logout']) == 'true') {
    unset($_SESSION['Data_login']);
    header('location:login.php');
}

if (!empty($_POST)) {
    $conn = new mysqli("localhost", "root", "", "tugbes");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        if (empty($username)) {
            header("location:login.php");
        } else if (empty($password)) {
            header("location:login.php");
        }else{ 
		$a= mysqli_query($conn, "SELECT * FROM formlogin where username='$username' and password ='$password'");
		$cek = mysqli_num_rows($a);
        $result = mysqli_fetch_array($a);

		if ($cek==1) {
			$_SESSION["Data_login"]= $username;
			$_SESSION["pesan"]= "SELAMAT DATANG";

			header("location:index.php");

	
		}else {
			header("location:login.php?allert=USERNAME ATAU PASSWORD ANDA SALAH!!");

		}
		}
		
        
    }
}

?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(&#39;images/bg-01.jpg&#39;);">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form action=""class="login100-form validate-form p-b-33 p-t-5" method="POST">

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn m-t-32">
					<a href="daftar.php" class="login100-form-btn">Registrasi</a>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script>
<?=isset($_GET["allert"])? "alert('".$_GET["allert"]."')":" "?>
</script>

<!--===============================================================================================-->
	<script type="text/javascript" async="" src="./Login V16_files/analytics.js.download"></script><script src="./Login V16_files/jquery-3.2.1.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Login V16_files/animsition.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Login V16_files/popper.js.download"></script>
	<script src="./Login V16_files/bootstrap.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Login V16_files/select2.min.js.download"></script>
<!--===============================================================================================-->
	<script src="./Login V16_files/moment.min.js.download"></script>
	<script src="./Login V16_files/daterangepicker.js.download"></script>
<!--===============================================================================================-->
	<script src="./Login V16_files/countdowntime.js.download"></script>
<!--===============================================================================================-->
	<script src="./Login V16_files/main.js.download"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="./Login V16_files/js"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="./Login V16_files/beacon.min.js.download" data-cf-beacon="{&quot;rayId&quot;:&quot;659f0430fcc71985&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.5.2&quot;,&quot;si&quot;:10}"></script>


</body></html>