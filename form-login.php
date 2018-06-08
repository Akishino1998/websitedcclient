<?php 

session_start(); 


?>
<!DOCTYPE html>
<html lang="en">
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
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto');
		.btn-login{
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

			<form method="post" action="form-login.php">
					<span class="login100-form-title">
						Login
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Username dibutuhkan"" >
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password dibutuhkan">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							<a href="form-login.php" class="btn-login">Login</a>
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Belum Punya Akun?
						</span>
						<a class="txt2" href="form-register.php">
							Klik Disini
						</a>
					</div>
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
if(isset($_POST['username']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	include('koneksi.php');
	$sql = "SELECT * FROM user_pelanggan WHERE username='$username'";
	$hasil = mysqli_query($conn, $sql);
	if(mysqli_num_rows($hasil))
	{
		while($data=mysqli_fetch_row($hasil))
		{

			if($data['0'] == $username)
			{
				if(password_verify($password, $data['1']))
				{
					$_SESSION['user_pelanggan'] = $data['2'];
					header('Location:index.php');
				}
				else
				{
					echo "<script src='css/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Passwordmu Salah!',
						  icon: 'error',
						  button: 'Oke!',
						});";
					echo "</script>";
					echo "<script> document.getElementById('username').value = '".$username."';</script>";
				}
			}
			else
			{
				if($data['1'] == $password)
				{
					//imposible
					echo "<script src='css/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Usernamemu Salah!',
						  icon: 'error',
						  button: 'Oke!',
						});";
					echo "</script>";
				}
				else
				{
					echo "<script src='css/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Akun Siapa Yang Mau Diakses?',
						  icon: 'error',
						  button: 'Oke!',
						});";
					echo "</script>";

				}
			}
		}
	}else{
		echo "<script src='css/sweetalert.min.js'></script>";
		echo "<script>";
		echo "swal({
			title: 'Oops!',
			text: 'Sepertinya Anda Belum Terdaftar?',
			icon: 'error',
			button: 'Oke!',
			});";
		echo "</script>";
	}
}

 ?>