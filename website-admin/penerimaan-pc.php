<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Data Table -->
    <link rel="stylesheet" href="assets\css\dataTables\jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets\css\dataTables\dataTables.responsive.css">
    <link rel="stylesheet" href="assets\css\dataTables\dataTables.bootstrap.css">
    <!--  -->
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" />
    <!-- <link href="assets/css/startmin.css" rel="stylesheet" /> -->
    <!-- <link href="assets/css/startmin.css" rel="stylesheet" /> -->
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <?php include('assets/layout/header.php'); ?>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Penerimaan PC
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr class="gradeA">
                                                <th>Id</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Merk PC</th>
                                                <th>Seri PC</th>
                                                <th>Kelengkapan</th>
                                                <th>Keluhan</th>
                                                <th>Tanggal Penerimaan</th>
                                                <th>Staff Penerima</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include('SQL\koneksi-admin.php');
                                        $sql = "SELECT daftar_penerimaan_pc.id_Penerimaan, CONCAT(Nama_Depan,' ' , Nama_Belakang) AS 'Nama Pelanggan', daftar_penerimaan_pc.Merk_PC, daftar_penerimaan_pc.Seri_PC, daftar_penerimaan_pc.Kelengkapan, daftar_penerimaan_pc.Keluhan, daftar_penerimaan_pc.Tanggal_Terima, anggota.Nama
                                            FROM daftar_penerimaan_pc, anggota, daftar_pelanggan
                                            WHERE daftar_penerimaan_pc.id_Pelanggan = daftar_pelanggan.id_Pelanggan
                                            AND daftar_penerimaan_pc.id_Penerima_Staff = anggota.id_Anggota";
                                        $hasil = mysqli_query($conn, $sql);
                                        if ( mysqli_num_rows($hasil))
                                        {
                                            while ( $data=mysqli_fetch_row($hasil))
                                            {
                                         ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data['0']; ?></td>
                                                <td><?php echo $data['1']; ?></td>
                                                <td><?php echo $data['2']; ?></td>
                                                <td><?php echo $data['3']; ?></td>
                                                <td><?php echo $data['4']; ?></td>
                                                <td><?php echo $data['5']; ?></td>
                                                <td><?php echo $data['6']; ?></td>
                                                <td><?php echo $data['7']; ?></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                            }
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; 2018 Doctor Computer | By : <a href="http://www.designbootstrap.com/" target="_blank">Doctor Computer</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/startmin.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/startmin.js"></script>
    <!-- Data Table -->
    <script src="assets\js\dataTables\dataTables.bootstrap.min.js"></script>
    <script src="assets\js\dataTables\jquery.dataTables.min.js"></script>

    </script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>
</html>
