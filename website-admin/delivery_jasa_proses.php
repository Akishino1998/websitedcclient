﻿<?php 

if($_GET['id']){
    $id = $_GET['id'];
    $id2 =$_GET['id2'];
    echo $id." ".$id2;
    include('SQL\koneksi-admin.php');
    $sql = "UPDATE delivery_jasa SET kurir='$id' WHERE id_delivery_jasa='$id2'";
    mysqli_query($conn, $sql);
    header("Location:delivery_jasa.php");
}

 ?>