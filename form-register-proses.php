<?php

$pass1 = $_POST['pass'];
$pass2 = $_POST['pass2'];
$user = $_POST['username'];
if($pass1 == $pass2){
	echo "Berhasil";
}else{
	echo "Tidak Berhasil";
}
?>