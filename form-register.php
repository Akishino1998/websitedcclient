<html>
<head>
	<title>Login | Doctor Computer</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/fontawesome-all.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto');
		.btn-register{
			text-decoration: none;
			font-size: 20px;
			color: white;
			font-family: 'Roboto', sans-serif;
		}
	</style>
</head>
<body>
	<div class="limiter">
		<img class="img" src="img/img4.jpg">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="form-register.php" id="form-register">
					<fieldset>
						<span class="login100-form-title">
							Register Member
						</span>
						<div class="wrap-input100">
							<input class="input100" type="text" name="username" placeholder="Username" id="username">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i><!-- ganti gambarnya -->
							</span>
						</div>
						<div class="wrap-input100">
							<input class="input100" type="password" name="pass" placeholder="Password" id="password1">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div class="wrap-input100">
							<input class="input100" type="password" name="pass2" placeholder="Ulangin Passwordnya" id="password2">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
							<a href="form-register.php" class="btn-register">Register</a>
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
								Sudah Punya Akun?
							</span>
							<a class="txt2" href="form-login.php">
								Login Disini!
							</a>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
<?php
	if (isset($_POST['username']) && $_POST['username']!= "")
	{
		if(isset($_POST['pass']) && $_POST['pass']!= "")
		{
			if(isset($_POST['pass2']) && $_POST['pass2']!= "")
			{
				if($_POST['pass'] == $_POST['pass2'])
				{
					//
					//
					//header('location:form-register-proses.php');
					echo "kgggggggggggggggggg";
				}
				else
				{
					echo "<script src='css/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Passwordnya gak sama, kak!',
						  icon: 'info',
						  button: 'Oke!',
						});";
					echo "</script>";
					echo "<script> document.getElementById('username').value = '".$_POST['username']."';</script>";

				}
			}
			else
			{
				echo "<script src='css/sweetalert.min.js'></script>";
				echo "<script>";
				echo "swal({
					  title: 'Oops!',
					  text: 'Ulangi Passwordnya ketinggalan, kak!',
					  icon: 'info',
					  button: 'Oke!',
					});";
				echo "</script>";
				echo "<script> document.getElementById('username').value = '".$_POST['username']."';</script>";
			}
		}
		else
		{
			if(isset($_POST['pass2']) && $_POST['pass2']!= "")
			{
				echo "<script src='css/sweetalert.min.js'></script>";
				echo "<script>";
				echo "swal({
					  title: 'Oops!',
					  text: 'Passwordnya Ketinggalan, kak!',
					  icon: 'info',
					  button: 'Oke!',
					});";
				echo "</script>";
				echo "<script> document.getElementById('username').value = '".$_POST['username']."';</script>";
			}
			else
			{
				echo "<script src='css/sweetalert.min.js'></script>";
				echo "<script>";
				echo "swal({
					  title: 'Oops!',
					  text: 'Password dan Ulangi Passwordnya Ketinggalan, kak!',
					  icon: 'info',
					  button: 'Oke!',
					});";
				echo "</script>";
				echo "<script> document.getElementById('username').value = '".$_POST['username']."';</script>";
			}
		}
	}
	else
	{
		if(isset($_POST['pass']) && $_POST['pass']!= "")
		{
			if(isset($_POST['pass2']) && $_POST['pass2']!= "")
			{
				if($_POST['pass'] == $_POST['pass2'])
				{
					echo "<script src='css/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
					  	title: 'Oops!',
					  	text: 'Usernamenya diisi juga, kak ;_;',
					  	icon: 'info',
					  	button: 'Oke!',
					});";
					echo "</script>";
				}
			}
			else
			{
				echo "<script src='css/sweetalert.min.js'></script>";
				echo "<script>";
				echo "swal({
					  title: 'Oops!',
					  text: 'Username dan Ulangi Passwordnya kak, ketinggalan =_=',
					  icon: 'info',
					  button: 'Oke!',
					});";
				echo "</script>";
			}
		}
		else
		{
			if(isset($_POST['pass2']))
			{
				echo "<script src='css/sweetalert.min.js'></script>";
				echo "<script>";
				echo "swal({
					  title: 'Oops!',
					  text: 'Username dan Passwordnya kak, ketinggalan :(',
					  icon: 'info',
					  button: 'Oke!',
					});";
				echo "</script>";
			}
			else
			{

			}
		}
	}
 ?>