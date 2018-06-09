<?php 
session_start(); 
echo "Redirect";
$username = $_SESSION['username_pelanggan'];
$password =  $_SESSION['password_pelanggan'];
include('koneksi.php');
$sql = "SELECT * FROM daftar_pelanggan";
$jumlah_data = (int)mysqli_num_rows(mysqli_query($conn, $sql))+1;
$sql = "INSERT INTO daftar_pelanggan(id_Pelanggan) VALUES('PL-".$jumlah_data."')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO user_pelanggan VALUES('".$username."','".$password."','PL-".$jumlah_data."')";
mysqli_query($conn, $sql);
session_destroy();
header('Location:form-register-next.php');
?>