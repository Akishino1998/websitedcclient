﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Penerimaan PC | Doctor Computer</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <link href="assets\css\font-awesome\css\fontawesome-all.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">Doctor Computer</a>
            </div>

            <div class="notifications-wrapper">
            <ul class="nav" >
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                                <li>
                                    <a href="#">
                                        <div>
                                            <p>
                                                <strong>Task 1</strong>
                                                <span class="pull-right text-muted">60% Complete</span>
                                            </p>
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">30% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                                <span class="sr-only">30% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 3</strong>
                                                    <span class="pull-right text-muted">80% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                        <span class="sr-only">80% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 4</strong>
                                                    <span class="pull-right text-muted">90% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                        <span class="sr-only">90% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <li class="divider"></li>
                                <li>
                                    <a class="text-center" href="#">
                                        <strong>See Tasks List + </strong>
                                    </a>
                                </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        </nav>
                <!-- /. NAV TOP  -->
                <nav  class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li>
                                <div class="user-img-div">
                                    <img src="assets/img/user.jpg" class="img-circle" />
                                </div>
                            </li>
                             <li>
                                <a  href="#"> <strong> Who Am I </strong></a>
                            </li>
                            <li>
                                <a  href="index.php"><i class="fa fa-tachometer-alt  "></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="penerimaan-pc.php" class="active-menu" ><i class="fa fa-laptop "></i>Daftar Penerimaan </a>
                            </li>
                            <li>
                                <a href="table.php"><i class="fa fa-bolt "></i>Data Tables </a>
                            </li>
                            <li>
                                <a href="forms.php"><i class="fa fa-code "></i>Forms</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#"><i class="fa fa-cogs "></i>Second  Link</a>
                                    </li>
                                     <li>
                                        <a href="#"><i class="fa fa-bullhorn "></i>Second Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level<span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third  Link</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blank.php"><i class="fa fa-dashcube "></i>Blank Page</a>
                            </li>
                        </ul>
                    </div>

                </nav>

        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls" style="margin-left: 180px;">
            <div id="page-inner">
                <div class="row">
                    <h2>Pagi</h2>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Daftar Penerimaan PC Yang Belum Dikerjakan</h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover display" id="dataTables">
                                        
                                    </style>
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
                                        <tbody>
                                        <?php
                                        include('SQL\koneksi-admin.php');
                                        $sql = "SELECT daftar_penerimaan_pc.id_Penerimaan, CONCAT(Nama_Depan,' ' , Nama_Belakang) AS 'Nama Pelanggan', daftar_penerimaan_pc.Merk_PC, daftar_penerimaan_pc.Seri_PC, daftar_penerimaan_pc.Kelengkapan, daftar_penerimaan_pc.Keluhan, daftar_penerimaan_pc.Tanggal_Terima, anggota.Nama
                                                FROM daftar_penerimaan_pc, anggota, daftar_pelanggan,status_pengembalian_pc
                                                WHERE daftar_penerimaan_pc.id_Pelanggan = daftar_pelanggan.id_Pelanggan
                                                AND daftar_penerimaan_pc.id_Penerima_Staff = anggota.id_Anggota
                                                AND status_pengembalian_pc.id_penerimaan = daftar_penerimaan_pc.id_Penerimaan
                                                AND status_pengembalian_pc.Status_pengembalian = 'Belum'";
                                        $hasil = mysqli_query($conn, $sql);
                                        if ( mysqli_num_rows($hasil))
                                        {
                                            while ( $data=mysqli_fetch_row($hasil))
                                            {
                                         ?>

                                            <tr class="odd gradeX">
                                                <td><?php echo $data['0']; ?></td>
                                                <td><?php echo $data['1']; ?></td>
                                                <td><?php echo $data['2']; ?></td>
                                                <td><?php echo $data['3']; ?></td>
                                                <td><?php echo $data['4']; ?></td>
                                                <td><?php echo $data['5']; ?></td>
                                                <td><?php echo $data['6']; ?></td>
                                                <td><?php echo $data['7']; ?></td>
                                            </tr>

                                        <?php
                                            }
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>Daftar Penerimaan PC Yang Sudah Dikerjakan</h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover display" id="dataTables2" style="width: 100%">
                                        
                                    </style>
                                        <thead>
                                            <tr class="gradeA">
                                                <th>Nama Pelanggan</th>
                                                <th>Merk PC</th>
                                                <th>Seri PC</th>
                                                <th>Tanggal Penerimaan</th>
                                                <th>Tanggal Pengembalian</th>
                                                <th>Penerima</th>
                                                <th>Teknisi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include('SQL\koneksi-admin.php');
                                        $sql = "SELECT CONCAT(Nama_Depan,' ' , Nama_Belakang) AS 'Nama Pelanggan', daftar_penerimaan_pc.Merk_PC, daftar_penerimaan_pc.Seri_PC,  daftar_penerimaan_pc.Tanggal_Terima,status_pengembalian_pc.Tgl_Pengembalian, anggota.Nama AS 'Penerima', status_pengembalian_pc.teknisi  AS 'Teknisi'
                                                FROM daftar_penerimaan_pc, anggota, daftar_pelanggan,status_pengembalian_pc
                                                WHERE daftar_penerimaan_pc.id_Pelanggan = daftar_pelanggan.id_Pelanggan
                                                AND daftar_penerimaan_pc.id_Penerima_Staff = anggota.id_Anggota
                                                AND status_pengembalian_pc.id_penerimaan = daftar_penerimaan_pc.id_Penerimaan
                                                AND status_pengembalian_pc.Status_pengembalian = 'Sudah'";
                                        $hasil = mysqli_query($conn, $sql);
                                        if ( mysqli_num_rows($hasil))
                                        {
                                            while ( $data=mysqli_fetch_row($hasil))
                                            {
                                         ?>

                                            <tr class="odd gradeX">
                                                <td><?php echo $data['0']; ?></td>
                                                <td><?php echo $data['1']; ?></td>
                                                <td><?php echo $data['2']; ?></td>
                                                <td><?php echo $data['3']; ?></td>
                                                <td><?php echo $data['4']; ?></td>
                                                <td><?php echo $data['5']; ?></td>
                                                <td><?php echo $data['6']; ?></td>

                                            </tr>

                                        <?php
                                            }
                                        }?>
                                        </tbody>
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
    

    <?php include('assets/layout/footer.php'); ?>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>

    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables2').DataTable();
    });
    </script>

</body>
</html>
