<?php 
	$password_asli = 'iin';
	echo "Password Asli : ".$password_asli;
	echo "<br>";echo "<br>";
	$password_enkrip = password_hash($password_asli, PASSWORD_DEFAULT);
	echo  'Password Hasil Enkrip : '. $password_enkrip;
	echo "<br>";
	echo password_verify($password_asli, $password_enkrip);
?>