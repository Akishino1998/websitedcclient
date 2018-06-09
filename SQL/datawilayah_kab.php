<?php 
$kodepos = $_GET['id'];
$koneksi = mysqli_connect('localhost','root','','wilayah_indo');
$sql = "SELECT * FROM wilayah_indo.tbl_kodepos WHERE tbl_kodepos.kodepos='$kodepos' GROUP BY kabupaten";
$hasil = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($hasil))
{
	while ($data = mysqli_fetch_row($hasil)) {
	    echo "<option value='".$data['3']."' id='items'>".$data['3']."</option><br>";
	}
}
else
{
	echo "<option value='' id='items'>Pilih Kabupaten</option><br>";
}
 ?>
