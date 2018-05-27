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
                                            <tr>
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
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">5</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 6</td>
                                                <td>Win 98+</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                               <td>Misc</td>
                                               <td>NetFront 3.1</td>
                                               <td>Embedded devices</td>
                                               <td class="center">-</td>
                                               <td class="center">C</td>
                                           </tr>
                                           <tr class="gradeA">
                                               <td>Misc</td>
                                               <td>NetFront 3.4</td>
                                               <td>Embedded devices</td>
                                               <td class="center">-</td>
                                               <td class="center">A</td>
                                           </tr>
                                           <tr class="gradeX">
                                               <td>Misc</td>
                                               <td>Dillo 0.8</td>
                                               <td>Embedded devices</td>
                                               <td class="center">-</td>
                                               <td class="center">X</td>
                                           </tr>
                                           <tr class="gradeX">
                                               <td>Misc</td>
                                               <td>Links</td>
                                               <td>Text only</td>
                                               <td class="center">-</td>
                                               <td class="center">X</td>
                                           </tr>
                                           <tr class="gradeX">
                                               <td>Misc</td>
                                               <td>Lynx</td>
                                               <td>Text only</td>
                                               <td class="center">-</td>
                                               <td class="center">X</td>
                                           </tr>
                                           <tr class="gradeC">
                                               <td>Misc</td>
                                               <td>IE Mobile</td>
                                               <td>Windows Mobile 6</td>
                                               <td class="center">-</td>
                                               <td class="center">C</td>
                                           </tr>
                                           <tr class="gradeC">
                                               <td>Misc</td>
                                               <td>PSP browser</td>
                                               <td>PSP</td>
                                               <td class="center">-</td>
                                               <td class="center">C</td>
                                           </tr>
                                           <tr class="gradeU">
                                               <td>Other browsers</td>
                                               <td>All others</td>
                                               <td>-</td>
                                               <td class="center">-</td>
                                               <td class="center">U</td>
                                           </tr>
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
