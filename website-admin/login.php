<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login | Doctor Computer</title>
	<link rel="stylesheet" href="assets/css/style-login.css">
</head>
<body>
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Doctor<span>Computer</span></div>
		</div>
		<br>
		<div class="login">
				<form action="login.php" method="post">
					<input type="text" placeholder="username" name="user"><br>
					<input type="password" placeholder="password" name="password"><br>
					<input type="submit" value="Login">
				</form>
		</div>
</body>
</html>

<?php 
session_start();
if(isset($_POST['user']))
{
	$username = $_POST['user'];
	
	$password = $_POST['password'];
	include('SQL\koneksi-admin.php');
	$sql = "SELECT * FROM akun_staff WHERE username='$username'";
	$hasil = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($hasil))
	{
		while($data=mysqli_fetch_row($hasil))
		{
			if($data['0'] == $username)
			{
				if($data['1'] == $password)
				{
					if($data['3']=='Master')
					{
						
						$_SESSION['type_user'] = 'Master';
						$_SESSION['user'] = $data['2'];
						echo $_SESSION['user'];
						//header('Location:index.php');
					}
					elseif($data['3']=='Admin') 
					{
						session_start();
						$_SESSION['type_user'] = 'Admin';
						$_SESSION['user'] = $username;
						header('Location:index.php');
					}
					elseif($data['3']=='Sales') 
					{
						session_start();
						$_SESSION['type_user'] = 'Sales';
						$_SESSION['user'] = $username;
						header('Location:index.php');
					}
				}
				else
				{
					echo "<script src='assets/js/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Passwordmu Salah!',
						  icon: 'error',
						  button: 'Oke!',
						});";
					echo "</script>";
				}
			}
			else
			{
				if($data['1'] == $password)
				{
					echo "<script src='assets/js/sweetalert.min.js'></script>";
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
					echo "<script src='assets/js/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Akun Siapa Yang Mau Diakses?',
						  icon: 'error',
						  button: 'Oke!',
						});";
					echo "</script>";
					echo $data['0'];

				}
			}
		}
	}else{
		echo "<script src='assets/js/sweetalert.min.js'></script>";
					echo "<script>";
					echo "swal({
						  title: 'Oops!',
						  text: 'Akun Siapa Yang Mau Diakses?',
						  icon: 'error',
						  button: 'Oke!',
						});";
					echo "</script>";
					echo $data['0'];
	}
}else{
	
}
