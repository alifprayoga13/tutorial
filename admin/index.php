﻿<?php
session_start();
if($_SESSION['level']=="") {
    header("Location: ../admin/index.php");
}

elseif ($_SESSION['level']=="user") {
    header("Location: ../user/index.php");
}
elseif (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();
}

include "../config.php";

$sql = "SELECT * from users where email='{$_SESSION['SESSION_EMAIL']}'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>:: Admin ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="Admin.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/users/Logo.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/users/logo_sm.png" alt="" height="46">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="Admin.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="assets/images/users/Logo_dark.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/users/logo_sm_dark.png" alt="" height="46">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Admin Settings</li>

                        <li class="side-nav-item">
                            <a  href="pages-profile.php"  class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Profile </span>
                            </a>
                            
                        </li>
                        <li class="side-nav-item">
                            <a href="Daftaruser.php" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span> List Daftar User </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="List.php" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> List Tema </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="statusundangan.php"  class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Status Undangan </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="./Tools/scan.php" class="side-nav-link">
                                <i class="mdi-qrcode"></i>
                                <span> Scan Qr Code</span>
                            </a>
                        </li>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                     
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/ellipse.png" alt="user-image" class="rounded-circle">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Sign In</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Sign Up</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Register</span>
                                    </a>
                                    
                                    <!-- item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        
                        <h1 class="page-title">Halo !! <br><?php echo $row["name"]?></h1>
                        <!-- end page title -->
                        <?php }?>
                       <?php
                        $sql = "SELECT COUNT(id_undangan)as knoyan FROM undangan ";
                        $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                       ?>
                        <!-- end row -->

                        <div class="container">
                            <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="card col-sm-2 mx-auto">
                                            <div class="card-title text-center">
                                                <h1><?php echo $row["knoyan"]?></h1>
                                             </div>  
                                            
                                            <?php }?>
                                            <?php
                                            $sql = "SELECT COUNT(id_kategori)as knoyan FROM kategori ";
                                            $result = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                        ?>

                                             <div class="card-text text-center">
                                                <p>Total Undangan</p>
                                             </div>
                                        </div>
                                         <div class="card col-sm-2 mx-auto">
                                            <div class="card-title text-center">
                                                <h1><?php echo $row["knoyan"]?></h1>
                                             </div>  

                                             <?php }?>
                                             <?php
                                            $sql = "SELECT COUNT(id_tamu)as knoyan FROM tamu ";
                                            $result = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                        ?>
                                             <div class="card-text text-center">
                                                <p>Kategori</p>
                                             </div>
                                        </div>
                                         <div class="card col-sm-2 mx-auto">
                                            <div class="card-title text-center">
                                                <h1><?php echo $row["knoyan"]?></h1>
                                             </div>  
                                             <?php }?>
                                             <div class="card-text text-center">
                                                <p>Tamu Undangan</p>
                                             </div>
                                        </div>
                                       
                                        </div>  
                                        </div>
                                    </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                        <!-- end row -->
                    </div>
                    <!-- container -->
                       
                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Project-with Combination Skils
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/verify.js"></script>
        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
    </body>
</html>
