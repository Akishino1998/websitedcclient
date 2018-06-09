<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/css/bootstrap/zebra_datepicker.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-regeister-2.css">
    <!-- <link rel="stylesheet" href="css/hover.css"> -->
</head>
<body>  
<div class="container">
    <form method="post">
    <div class="row">
        <h4>Biodata Diri</h4>
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
            <input type="text" placeholder="Alamat (Ex. Jln. P. Suryanata)" name="alamat" />
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
                <input type="text" placeholder="Kode Pos" name="kode_pos" id="kodepos" onkeyup="loadData()" />
            </div>
        </div>
        <div class="input-group">
            <div class="col-half">
                <!-- <input type="text" placeholder="Provinsi" name="provinsi" /> -->
                <select name="provinsi" id="combobox_prov" class="combobox">
                  <option value="" selected="selected" id="items" >Pilih Provinsi</option>
                </select>
            </div>
            <div class="col-half">
                <!-- <input type="text" placeholder="Kabupaten" name="kabupaten" /> -->
                <select name="kabupaten" id="combobox_kab" class="combobox">
                  <option value="" selected="selected" id="items">Pilih Kabupaten</option>
                </select>
            </div>          
        </div>
        <div class="input-group">
            <div class="col-half">
                <!-- <input type="combobox" placeholder="Kecamatan" name="kecamatan" /> -->
                <select name="kecamatan" id="combobox_kec" class="combobox">
                  <option value="" selected="selected" id="items">Pilih Kecamatan</option>
                </select>
            </div>
            <div class="col-half">
                <!-- <input type="text" placeholder="Keluaran" name="kelurahan" /> -->
                <select name="kelurahan" id="combobox_kel" class="combobox">
                  <option value="" selected="selected" id="items">Pilih Keluaran</option>
                </select>
            </div> 
        </div>
        <div class="input-group input-group-icon">
            <input type="email" placeholder="Email" name="email" />
            <div class="input-icon"><i class="fa fa-envelope"></i></div>
        </div>
        <div class="input-group input-group-icon">
            <input type="email" placeholder="No. Telp" name="nohp" id="nohp" />
            <div class="input-icon"><i class="fa fa-phone"></i></div>
        </div>
    </div>
    <div class="row">
        <div class="col-half">
            <h5>Tanggal Lahir</h5>
            <div class="input-group">
                <input type="text" name="tgl_lahir" id="datepicker" placeholder="Tanggal Lahir" />
            </div>
        </div>
        <div class="col-half">
            <h5>Jenis Kelamin</h5>
            <div class="input-group">
            <input type="radio" name="gender" value="laki" id="gender-male"/>
            <label for="gender-male">Laki-Laki</label>
            <input type="radio" name="gender" value="perempuan" id="gender-female"/>
            <label for="gender-female">Perempuan</label>
            </div>
        </div>
    </div>
    <div class="row">
		<input type="submit" name="submit" value="Simpan!" id="submit" class="hvr-rectangle-in" />
	</div>
  </form>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="path/to/jquery-3.2.1.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/zebra_datepicker.min.js"></script>
    <script  src="js/index.js"></script>
    <script>
        $(document).ready(function() {
            $('#datepicker').Zebra_DatePicker({
                direction: ['1998-01-01', true],
                format: 'l, d F Y',
                months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                days:['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                offset:[-300,10],
                show_select_today: false,
                lang_clear_date: "Hapus",
            });
        });
    </script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        loadData();
    });

    function loadData(){
        var kodepos = document.getElementById('kodepos').value;
        $.get('SQL/datawilayah_prov.php?id='+kodepos, function(data){
            $('#combobox_prov').html(data);
        });
        $.get('SQL/datawilayah_kab.php?id='+kodepos, function(data){
            $('#combobox_kab').html(data);
        });
        $.get('SQL/datawilayah_kec.php?id='+kodepos, function(data){
            $('#combobox_kec').html(data);
        });
        $.get('SQL/datawilayah_kel.php?id='+kodepos, function(data){
            $('#combobox_kel').html(data);
        });
    }
</script>
<?php 
if(isset($_POST['submit']))
{
    //Dapatkan Tanggal Lahir
    $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    echo $_POST['nama_depan']." ".$_POST['nama_belakang'];
    $tgl = explode(" ",$_POST['tgl_lahir']);
    $getBulan = 0;
    //getBulan
    for ($i=0; $i < count($bulan); $i++) { 
        if ($tgl[2] == $bulan[$i]) {
            $getBulan = $i+1;
        }
    }
    $tgl_lahir = $tgl[3]."-0".$getBulan."-".$tgl[1];

    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $gender = $_POST['gender'];
    $kode_pos = $_POST['kode_pos'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $provinsi = $_POST['provinsi'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    echo $provinsi;
    //cek database dulu sebelum insert data
    //dan ingat, user kadang enggak ngisi semuanya
    //user kadang ngisi seperlunya saja, jadi enggak pasti ngisinya
    //
}
?>