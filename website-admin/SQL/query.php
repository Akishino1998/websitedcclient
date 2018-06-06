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
	public function getDataFromSelectIf($namatabel,$field, $kondisi)
	{
		include('koneksi-admin.php');
		$sql = "SELECT * FROM ".$namatabel."WHERE". $field."=".$kondisi;
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
		if($namatabel == 'delivery_jasa')
		{
			include('koneksi-admin.php');
			$sql = "SELECT COUNT(*) AS 'Jumlah' FROM ".$namatabel. " WHERE Status='Belum'";
			$hasil = mysqli_query($conn, $sql);
			if ( mysqli_num_rows($hasil))
			{
				while ( $data=mysqli_fetch_assoc($hasil))
				{
					echo $data['Jumlah'];
				}
			}
		}
		else if($namatabel == 'pemesanan_barang')
		{
			include('koneksi-admin.php');
			$sql = "SELECT COUNT(*) AS 'Jumlah' FROM ".$namatabel. " WHERE Keterangan='Belum'";
			$hasil = mysqli_query($conn, $sql);
			if ( mysqli_num_rows($hasil))
			{
				while ( $data=mysqli_fetch_assoc($hasil))
				{
					echo $data['Jumlah'];
				}
			}
		}
		else if($namatabel == 'daftar_penerimaan_pc')
		{
			include('koneksi-admin.php');
			$sql = "SELECT COUNT(daftar_penerimaan_pc.id_Penerimaan) AS 'Jumlah' FROM daftar_penerimaan_pc, status_pengembalian_pc 
				WHERE daftar_penerimaan_pc.id_Penerimaan = status_pengembalian_pc.id_penerimaan
				AND
				status_pengembalian_pc.Status_pengembalian = 'Belum'";
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
	public function getPenerimaanPC()
	{
		include('koneksi-admin.php');
		$sql = "SELECT daftar_penerimaan_pc.id_Penerimaan, CONCAT(Nama_Depan,' ' , Nama_Belakang) AS 'Nama Pelanggan', daftar_penerimaan_pc.Merk_PC, daftar_penerimaan_pc.Seri_PC, daftar_penerimaan_pc.Kelengkapan, daftar_penerimaan_pc.Keluhan, daftar_penerimaan_pc.Tanggal_Terima, anggota.Nama
			FROM daftar_penerimaan_pc, anggota, daftar_pelanggan
			WHERE daftar_penerimaan_pc.id_Pelanggan = daftar_pelanggan.id_Pelanggan
			AND daftar_penerimaan_pc.id_Penerima_Staff = anggota.id_Anggota";
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
