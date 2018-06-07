<?php 
include('koneksi-admin.php');
session_start();
session_destroy();
header('Location:../login.php');

 ?>