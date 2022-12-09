<?php
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
include "../../../../config.php";
$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
   
if (mysqli_num_rows($query) > 0) {
   $row = mysqli_fetch_assoc($query);
}
            if(isset($_POST['submit']) && isset($_FILES['my_image'])){

                $img_name = $_FILES['my_image']['name'];
                $img_size = $_FILES['my_image']['size'];
                $tmp_name = $_FILES['my_image']['tmp_name'];
                $error = $_FILES['my_image']['error'];
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png"); 

                            $foto_mempelai = uniqid("IMG-", true).'.'.$img_ex_lc;
                            $img_upload_path = "../../../../upload/perkawinan/".$foto_mempelai;
                            move_uploaded_file($tmp_name, $img_upload_path);

                $judul = mysqli_real_escape_string($conn, $_POST['judul']);
                $nama_pria = mysqli_real_escape_string($conn, $_POST['nama_pria']);
                $nama_ayah_pria = mysqli_real_escape_string($conn, $_POST['nama_ayah_pria']);
                $nama_ibu_pria = mysqli_real_escape_string($conn, $_POST['nama_ibu_pria']);
                $nama_wanita = mysqli_real_escape_string($conn, $_POST['nama_wanita']);
                $nama_ayah_wanita = mysqli_real_escape_string($conn, $_POST['nama_ayah_wanita']);
                $nama_ibu_wanita = mysqli_real_escape_string($conn, $_POST['nama_ibu_wanita']);
                $tanggal_akad = mysqli_real_escape_string($conn, $_POST['tanggal_akad']);
                $alamat_detail_akad = mysqli_real_escape_string($conn, $_POST['alamat_detail_akad']);
                $gmaps_akad = mysqli_real_escape_string($conn, $_POST['gmaps_akad']);
                $tanggal_resepsi = mysqli_real_escape_string($conn, $_POST['tanggal_resepsi']);
                $alamat_detail_resepsi = mysqli_real_escape_string($conn, $_POST['alamat_detail_resepsi']);
                $gmaps_resepsi = mysqli_real_escape_string($conn, $_POST['gmaps_resepsi']);
            
             $sql = "INSERT INTO `undangan`.`undangan` (`id_undangan`, `Judul`, `Foto_mempelai`, `Nama_Mempelai_Pria`, `Nama_Mempelai_Wanita`, `Ayah_Wanita`, `Ibu_Wanita`, `Ayah_Pria`, `Ibu_Pria`, `tgl_akat`, `tgl_resepsi`, `lokasi_akat`, `maps_akat`, `lokasi_resepsi`, `Maps_Repsepsi`, `id_user`, `id_kategori`,`foto`) VALUES (NULL, '".$judul."', '".$foto_mempelai
             ."', '".$nama_pria."', '".$nama_wanita."', '".$nama_ayah_wanita."', '".$nama_ibu_wanita."', '".$nama_ayah_pria."', '".$nama_ibu_pria."', '".$tanggal_akad."', '".$tanggal_resepsi."', '".$alamat_detail_akad."', '".$gmaps_akad."', '".$alamat_detail_resepsi."', '".$gmaps_resepsi."', '".$row["id_user"]."', '1','".$foto_mempelai."'); ";
             $result = mysqli_query($conn, $sql);
             header("Location: ../../../statusundangan.php");

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
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control email" >                               
                                </div>

                            <h1 class="text-center">Mempelai Pria</h1>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Nama</label>
                                    <input type="text" name="nama_pria" class="form-control email" >                               
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Nama Ayah</label>
                                    <input type="text" name="nama_ayah_pria" class="form-control email" >                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Nama Ibu</label>
                                    <input type="text" name="nama_ibu_pria" class="form-control password"  >                                
                                </div>
                            </div>  
                            <h1 class="text-center">Mempelai Wanita</h1>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Nama</label>
                                    <input type="text" name="nama_wanita" class="form-control email" >                               
                                </div>
                            </div>
                        <div class="row">
                        <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Nama Ayah</label>
                                    <input type="text" name="nama_ayah_wanita" class="form-control email" >                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Nama Ibu</label>
                                    <input type="text" name="nama_ibu_wanita" class="form-control password"  >                                
                                </div>
                            </div>  
                            <h1 class="text-center">Akad</h1>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Tanggal Akad</label>
                                    <input type="date" name="tanggal_akad" class="form-control email" >                               
                                </div>
                            </div>
                        <div class="row">
                        <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Alamat Detail</label>
                                    <input type="text" name="alamat_detail_akad" class="form-control email" >                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Link Google Maps</label>
                                    <input type="text" name="gmaps_akad" class="form-control password"  >                                
                                </div>
                            </div>  
                            <h1 class="text-center">Resepsi</h1>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Tanggal Resepsi</label>
                                    <input type="date" name="tanggal_resepsi" class="form-control email" >                               
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Alamat Detail</label>
                                    <input type="text" name="alamat_detail_resepsi" class="form-control email" >                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Link Google Maps</label>
                                    <input type="text" name="gmaps_resepsi" class="form-control password"  >                                
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
            </div>
            
        </div>
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