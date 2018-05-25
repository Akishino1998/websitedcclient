<?php


class query
{
	public function getDataFromSelect($namatabel)
	{
		include('koneksi-admin.php');
		$sql = "SELECT * FROM ".$namatabel;
		$hasil = mysqli_query($conn, $sql);
		if ( mysqli_num_rows($hasil))
		{
			while ( $data=mysqli_fetch_row($hasil))
			{
				echo $data['0']."<br>";
			}
		}
	}
	public function getSumArrow($namatabel)
	{
		include('koneksi-admin.php');
		$sql = "SELECT COUNT(*) AS 'Jumlah' FROM ".$namatabel;
		$hasil = mysqli_query($conn, $sql);
		if ( mysqli_num_rows($hasil))
		{
			while ( $data=mysqli_fetch_assoc($hasil))
			{
				echo $data['Jumlah'];
			}
		}
	}
}


?>
