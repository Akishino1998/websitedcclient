﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dasboard | Doctor Computer</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/startmin.css" rel="stylesheet">
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets\css\font-awesome\css\fontawesome-all.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body >
    <div id="wrapper" >
        <?php 
        session_start();
        if(!isset($_SESSION['user'])){
            header('Location:login.php');
        }
        include('assets/layout/header.php'); 
        ?>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls" style="margin-left: 180px;">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Jika Ada Notif, Tolong Hubungi Teman Yang Bersangkutan!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6" >
                        <div class="panel panel-primary" >
                            <div class="panel-heading" >
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-truck fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size: 40px;"><?php $query->getSumArrow('delivery_jasa'); ?></div>
                                        <div style="margin-top: 15px; font-size: 20px;">Delivery Jasa</div>
                                    </div>
                                </div>
                            </div>
                            <a href="delivery_jasa.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Disini!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-dolly-flatbed fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size: 40px;"><?php $query->getSumArrow('pemesanan_barang'); ?></div>
                                        <div style="margin-top: 15px; font-size: 20px;">Order Barang</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Disini!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-laptop fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size: 40px;"><?php $query->getSumArrow('daftar_penerimaan_pc'); ?></div>
                                        <div style="margin-top: 15px; font-size: 18px;">Penerimaan PC</div>
                                    </div>
                                </div>
                            </div>
                            <a href="penerimaan-pc.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Disini!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-hand-holding-usd  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size: 40px;">0</div>
                                        <div style="margin-top: 15px; font-size: 15px;">Pemasukan Hari Ini!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Disini!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            This is a free admin dashboard temple for personal and commercial use. Use this template for your projecs and save you money and time. Hope you will like it.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--    Hover Rows  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>Daftar Inventaris Doctor Computer</strong>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th ><center>#</center></th>
                                                <th ><center>Nama Barang</center></th>
                                                <th ><center>No. Seri</center></th>
                                                <th  ><center>Merk</center></th>
                                                <th><center>Jumlah Barang</center></th>
                                                <th><center>Harga Beli</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include('koneksi-admin.php');
                                            $sql = "SELECT * FROM inventaris";
                                            $hasil = mysqli_query($conn, $sql);
                                            while ($data=mysqli_fetch_row($hasil)) { 
                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $data['0']; ?></td>
                                                <td><?php echo $data['1']; ?></td>
                                                <td align="center"><?php echo $data['2']; ?></td>
                                                <td align="center"><?php echo $data['3']; ?></td>
                                                <td align="center"><?php echo $data['4']; ?></td>
                                                <td align="center">Rp. <?php echo $data['5'];  ?></td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Hover Rows  -->
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4 col-sm-4">
                        <div class="alert  alert-info">
                            <div class="current-notices">
                                <h3>Current Notices :</h3>
                                <hr />
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-8 col-sm-8">
                        <div class="list-group">
                            <a href="#!" class="list-group-item active">
                                <h4 class="list-group-item-heading">List Group Heading</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </a>
                        </div>
                        <br />
                        <h2> Bootstrap Media Objects</h2>
                        <br />
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/1.jpg" alt="" class="img-rounded" />
                            </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading </h4>
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                </div>
                        </div>
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="assets/img/2.jpg" alt="" class="img-rounded" />
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/1.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Nested media heading</h4>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                                    </div>
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
    <?php include("assets/layout/footer.php"); ?>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>
    <script>
        function onclickSukses(){
            swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
        }
    </script>

</body>
</html>
