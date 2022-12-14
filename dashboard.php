<?php
function getdatatinggi()
{
    $ch = curl_init();
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
    );
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/websiteblockchain/api/getdatatinggipow.php');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $authToken = curl_exec($ch);

    return $authToken;
}
$datatinggi = getdatatinggi();
$datatinggi = explode("\n", $datatinggi);
?>

<?php
function getdatasuhu()
{
    $ch = curl_init();
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
    );
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/websiteblockchain/api/getdatasuhupow.php');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $authToken = curl_exec($ch);

    return $authToken;
}
$datasuhu = getdatasuhu();
$datasuhu = explode("\n", $datasuhu);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CasaFarm Monitoring</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php require 'C:\xampp\htdocs\websiteblockchain\api\getdatatinggipow.php' ?>
    <?php require 'C:\xampp\htdocs\websiteblockchain\api\getdatasuhupow.php' ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link"><span>Monitoring Tanaman</span></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="user-panel mt-1 mb-1 d-flex">
                        <div class="image">
                            <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#">Admin CasaFarm</a>
                        </div>
                    </div>
                </li>
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Monitoring Tanaman</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-3 ">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <i class="fas fa-seedling"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Tinggi Tanaman 1</span>
                                    <span class="info-box-number"><?= $datatinggi[0] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-12 col-sm-6 col-md-3 ">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <i class="fas fa-seedling"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Tinggi Tanaman 2</span>
                                    <span class="info-box-number"><?= $datatinggi[1] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3 ">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1">
                                    <i class="fas fa-seedling"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Tinggi Tanaman 3</span>
                                    <span class="info-box-number"><?= $datatinggi[2] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <div class="col-12 col-sm-6 col-md-3 ">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1">
                                    <i class="fas fa-seedling"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Tinggi Tanaman 4</span>
                                    <span class="info-box-number"><?= $datatinggi[3] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>

                </div>
                <!-- /.row -->
                <div class="container-fluid">
                    <h4 class="mb-2">Sistem II</h4>
                    <div class="row">


                        <div class="col-12 col-sm-6 col-md-3 ">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-light elevation-1">
                                    <i class="fas fa-tint"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Suhu Air</span>
                                    <span class="info-box-number"><?= $datasuhu[0] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3 ">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-secondary elevation-1">
                                    <i class="fas fa-thermometer-three-quarters"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Suhu Ruang</span>
                                    <span class="info-box-number"><?= $datasuhu[1] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>


        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Hidroponik CasaFarm</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="form-inline mt-3">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                </ul>
            </nav>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Main Footer -->
    <!-- <footer class="main-footer">
     <strong>Copyright &copy; 2021 <a href="https://adminlte.io"></a></strong>
     <div class="float-right d-none d-sm-inline-block">
     </div>
 </footer> -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="assets/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="assets/dist/js/pages/dashboard2.js"></script>
</body>

</html>