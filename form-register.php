<?php 
session_start();
?>
<html>
<head>
	<title>Regisster | Doctor Computer</title>
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
		html, body {
		  height: 100%;
		}

		body {
		  display: grid;
		  font-family: "Open Sans", sans-serif;
		  font-size: 16px;
		  color: #223254;
		}

		.cbx {
		  margin: auto;
		  -webkit-user-select: none;
		  user-select: none;
		  cursor: pointer;
		}
		.cbx span {
		  display: inline-block;
		  vertical-align: middle;
		  transform: translate3d(0, 0, 0);
		}
		.cbx span:first-child {
		  position: relative;
		  width: 18px;
		  height: 18px;
		  border-radius: 3px;
		  transform: scale(1);
		  vertical-align: middle;
		  border: 1px solid #9098A9;
		  transition: all 0.2s ease;
		}
		.cbx span:first-child svg {
		  position: absolute;
		  top: 3px;
		  left: 2px;
		  fill: none;
		  stroke: #FFFFFF;
		  stroke-width: 2;
		  stroke-linecap: round;
		  stroke-linejoin: round;
		  stroke-dasharray: 16px;
		  stroke-dashoffset: 16px;
		  transition: all 0.3s ease;
		  transition-delay: 0.1s;
		  transform: translate3d(0, 0, 0);
		}
		.cbx span:first-child:before {
		  content: "";
		  width: 100%;
		  height: 100%;
		  background: #506EEC;
		  display: block;
		  transform: scale(0);
		  opacity: 1;
		  border-radius: 50%;
		}
		.cbx span:last-child {
		  padding-left: 3px;
		}
		.cbx:hover span:first-child {
		  border-color: #506EEC;
		}

		.inp-cbx:checked + .cbx span:first-child {
		  background: #506EEC;
		  border-color: #506EEC;
		  animation: wave 0.4s ease;
		}
		.inp-cbx:checked + .cbx span:first-child svg {
		  stroke-dashoffset: 0;
		}
		.inp-cbx:checked + .cbx span:first-child:before {
		  transform: scale(3.5);
		  opacity: 0;
		  transition: all 0.6s ease;
		}

		@keyframes wave {
		  50% {
		    transform: scale(0.9);
		  }
		}
		.kiri{
			left: 20px;
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
						<div class="wrap-input100 kiri">
							<input type="checkbox" id="cbx" class="inp-cbx" style="display: none" name="setuju">
							<label for="cbx" class="cbx">
							  <span>
							    <svg width="12px" height="10px" viewBox="0 0 12 10">
							      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
							    </svg>
							  </span>
							  <span>Saya Setujui Semua Peraturan!</span>
							</label>
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
	$tmp = $_POST['username'];
	$bool = false;
	for ($i=0; $i < strlen($tmp); $i++) { 
		if($tmp[$i] == " "){
			$bool = true;
		}
	}
	if($bool == false)
	{
		if(isset($_POST['pass']) && $_POST['pass']!= "")
		{
			if(isset($_POST['pass2']) && $_POST['pass2']!= "")
			{
				if(isset($_POST['setuju']) && $_POST['setuju'] != "")
				{
					echo "awdawdawd";
					if($_POST['pass'] == $_POST['pass2'])
					{
						include('koneksi.php');
						$sql = "SELECT * FROM user_pelanggan WHERE username='".$_POST['username']."'";
						$hasil = mysqli_query($conn, $sql);
						if(mysqli_num_rows($hasil))
						{
							echo "<script src='css/sweetalert.min.js'></script>";
							echo "<script>";
							echo "swal({
								title: 'Oops!',
						  		text: 'Usernamenya sudah dipake orang lain, kak :( Bikin baru ya, kak!',
						  		icon: 'info',
						  		button: 'Siap!',
							});";
							echo "</script>";
						}
						else
						{

							$password = password_hash($password_asli, PASSWORD_DEFAULT);
							$_SESSION['username_pelanggan'] = $_POST['username'];
							$_SESSION['password_pelanggan'] = $password;
							echo "<script> self.location='form-register-proses.php'</script>";
						}
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
					echo "belum";
					echo "<script src='css/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Belum Dicentang, kak! Soalnya harus taat aturan disini hehe :D',
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
		echo "<script src='css/sweetalert.min.js'></script>";
		echo "<script>";
		echo "swal({
			title: 'Oops!',
			text: 'Username enggak boleh pake spasi kak!',
			icon: 'info',
			button: 'Oke!',
			});";
		echo "</script>";
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