<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style-regeister-2.css">
</head>
<body>  
<div class="container">
  <form action="" method="post">
    <div class="row">
      <h4>Lengkapi Form Berikut Ini, ya :)</h4>
      <div class="input-group input-group-icon">
        <div class="col-half">
            <input type="text" placeholder="Nama Depan" name="nama_depan" />
            <div class="input-icon"><i class="fa fa-user"></i></div>
          </div>
        <div class="col-half">
            <input type="text" placeholder="Nama Belakang" name="nama_belakang" />
          </div>          
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Alamat (Ex. Jalan Pangeran Suryanata)" name="alamat" />
        <div class="input-icon"><i class="fa fa-street-view"></i></div>
      </div>
       <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="RT" name="rt" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="RW" name="rw" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="Kode Pos" name="kode_pos" />
          </div>
      </div>
      <div class="input-group">
        <div class="col-half">
            <input type="text" placeholder="Kecamatan" name="kecamatan" />
          </div>
        <div class="col-half">
            <input type="text" placeholder="Keluaran" name="kelurahan" />
          </div>          
      </div>
      <div class="input-group">
        <input type="text" placeholder="Provinsi" name="provinsi" />
      </div>
  	  <div class="input-group input-group-icon">
        <input type="email" placeholder="Email" name="email" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="No. Telp" name="nohp" />
        <div class="input-icon"><i class="fa fa-phone"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Tanggal Lahir</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="Hari" name="hari_lahir" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="Bulan" name="bulan_lahir" />
          </div>
          <div class="col-third">
            <input type="text" placeholder="Tahun" name="tahun_lahir" />
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Jenis Kelamin</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="laki" id="gender-male"/>
          <label for="gender-male">Laki-Laki</label>
          <input type="radio" name="gender" value="perempuan" id="gender-female"/>
          <label for="gender-female">Perempuan</label>
        </div>
      </div>
    </div>
    <div class="row">
		<input type="submit" name="submit" value="Simpan!"/>
	  </div>
    </div>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
    echo $_POST['nama_depan']." ".$_POST['nama_belakang'];
}
?>
