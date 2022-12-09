
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<?php


if(isset($_POST['submit']))
{
   
    if($_POST["pilih"]==1){
        $link = "./Wisuda/index.php";       
    }else if($_POST["pilih"]==2){
        $link = "./Ulang_Tahun/index.php";
    }elseif($_POST["pilih"]==3) {
        $link = "./Pernikahan/index.php?";
    }
    header("Location:".$link);
}

?>

<html>
<head>
        <meta charset="utf-8">
        <title>:: Admin ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="../../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="../../assets/images/users/Logo.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="../../assets/images/users/logo_sm.png" alt="" height="46">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="../../assets/images/users/Logo_dark.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="../../assets/images/users/logo_sm_dark.png" alt="" height="46">
                    </span>
                </a>
    
                <div class="h-200" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">User Settings</li>

                        <li class="side-nav-item">
                            <a  href="../../Undangan.php"  class="side-nav-link">
                                <i class="uil-home"></i>
                                <span> Back </span>
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
                                        <img src="../../assets/images/ellipse.png" alt="user-image" class="rounded-circle">
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
                                    <a href="../../../logout.php" class="dropdown-item notify-item">
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

<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
<div class="container">
    <h1 class="text-center">Pilih Category</h1>
    <p class="text-center">Silakan pilih Category untuk melanjutkan form</p>
    <br>
    <form action="" method="Post">
    <select name="pilih" class="form-select" aria-label="Default select example">
        <option selected>Pilih Category</option>
        <option value="1" >Wisuda</option>
        <option value="2" >Ulang Tahun</option>
        <option value="3" >Pernikahan</option>
    </select>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <script src="../../assets/js/vendor.min.js"></script>
        <script src="../../assets/js/app.min.js"></script>
        <script src="../../assets/js/verify.js"></script>
        <!-- third party js -->
        <script src="../../assets/js/vendor/apexcharts.min.js"></script>
        <script src="../../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="../../assets/js/pages/demo.dashboard.js"></script>
</html>