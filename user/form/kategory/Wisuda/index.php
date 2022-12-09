<?php
include "../../../../config.php";
session_start();
if($_SESSION['level']=="") {
    header("Location: ../admin/index.php");
}

elseif ($_SESSION['level']=="petugas") {
    header("Location: ../user/index.php");
}
elseif (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();
}
 $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
 if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
 }

            if(isset($_POST["submit"]) && isset($_FILES['my_image'])){


                $img_name = $_FILES['my_image']['name'];
                $img_size = $_FILES['my_image']['size'];
                $tmp_name = $_FILES['my_image']['tmp_name'];
                $error = $_FILES['my_image']['error'];
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png"); 

                            $foto_mempelai = uniqid("IMG-", true).'.'.$img_ex_lc;
                            $img_upload_path = "../../../../upload/wisudah/".$foto_mempelai;
                            move_uploaded_file($tmp_name, $img_upload_path);
                $judul = mysqli_real_escape_string($conn, $_POST['judul']);
                $kampus = mysqli_real_escape_string($conn, $_POST['kampus']);
                $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
                $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
            
             $sql = "INSERT INTO `undangan`.`undangan` (`id_undangan`, `Judul`, `id_user`, `id_kategori`, `lokasi_acara`, `nama_kampus`, `tgl_acara`, `foto`) VALUES (NULL, '".$judul."',".$row["id_user"].", '2', '".$lokasi."', '".$kampus."','".$tanggal."','".$foto_mempelai."');";
             $result = mysqli_query($conn, $sql);
             header("Location: ../../../Undangan.php");
            }

?>

<link rel="stylesheet" href="../../../../assets/css/bootstrap.min.css">
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>:: Admin ::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../../../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="../../../assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="../../../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="../../../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="../../../assets/images/users/Logo.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="../../../assets/images/users/logo_sm.png" alt="" height="46">
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

                        <li class="side-nav-title side-nav-item">Admin Settings</li>

                        <li class="side-nav-item">
                            <a  href="../index.php"  class="side-nav-link">
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
                                        <img src="../assets/images/ellipse.png" alt="user-image" class="rounded-circle">
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

    <div class="container">
    <h1 class="text-center">Lanjutkan Isi Form</h1>
    <p class="text-center">Lengkapi data dengan benar</p>
    <hr>
    <form method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                           <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Nama Kampus</label>
                                    <input type="text" name="kampus" class="form-control email" >                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control password"  >                                
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Tanggal Acara</label>
                                    <input type="date" name="tanggal" class="form-control" >                                
                                </div>
                            </div>
                            <div class="form-group form-float  col-sm">
                        </div>      
                        </div>             
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="my_image" accept="image/png, image/jpeg">
                </div>
                <div class="text-center">
                    <br>
                    <button class="btn btn-primary float-end " type="submit" value="Submit" name="submit">Submit</button> 
                </div>
            </form> 

    </div>
</body>
        <!-- bundle -->
        <script src="../../../assets/js/vendor.min.js"></script>
        <script src="../../../assets/js/app.min.js"></script>
        <script src="../../../assets/js/verify.js"></script>
        <!-- third party js -->
        <script src="../../../assets/js/vendor/apexcharts.min.js"></script>
        <script src="../../../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../../../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="../../../assets/js/pages/demo.dashboard.js"></script>
</html>