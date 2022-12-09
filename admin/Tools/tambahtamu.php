<?php
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
   
   if(isset($_GET['id_undangan'])){
      $id_undangan=$_GET['id_undangan'];

      if(empty($id_undangan))
      {
          echo "ID Tidak Ada";
      }
  }else
  {
      die("ID Tidak Ada");
  }
   include '../../config.php';

   $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
   
   if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_assoc($query);
   }

   $pesan = "";
   
   if (isset($_POST['submit'])) {  
      $nama_tamu = mysqli_real_escape_string($conn, $_POST['nama1']);        
      $email_tamu = mysqli_real_escape_string($conn, $_POST['email']);  
      
      if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tamu WHERE email='$email_tamu';"))) {
         $pesan = "<div class='alert alert-danger'>$email_tamu Email ini sudah digunakan.</div>";   
      
          
         
      } else {
         $insert = "INSERT INTO `tamu` (`id_tamu`, `nama`, `id_undangan`, `email`) VALUES (NULL, '".$nama_tamu."', '".$id_undangan."','".$email_tamu."');";

          mysqli_query($conn, $insert);
          echo "<script>alert('berhasil')</script>";
          header("Location: daftartamu.php?id_undangan=".$id_undangan."");
        
      }
   }
      
   
   
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
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- third party css -->
        <link href="../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
        

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="index.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="../assets/images/users/Logo.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="../assets/images/users/logo_sm.png" alt="" height="46">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="../assets/images/users/Logo_dark.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="../assets/images/users/logo_sm_dark.png" alt="" height="46">
                    </span>
                </a>
    
                <div class="h-200" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Admin Settings</li>

                        <li class="side-nav-item">
                            <a  href="../index.php"  class="side-nav-link">
                                <i class="uil-home"></i>
                                <span> Profile </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="../Daftaruser.php" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> List Daftar User</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="../List.php" class="side-nav-link">
                                <i class="uil-briefcase"></i>
                                <span> list Tema</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="../statusundangan.php" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span>Status Undangan</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="scan.php" class="side-nav-link">
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
                        <span><h1 class="page-title">Update</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                      

        <div class="container">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form method="post" autocomplete="off">
                                <div class="mb-3"  required>
                                    <label for="Name" class="form-label">Id user</label>
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
                        
                                    if (mysqli_num_rows($query) > 0) {
                                       $row = mysqli_fetch_assoc($query);
                                    ?>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="id_user" value="<?php echo $row['id_user'] ?>" disabled required>
                                    <?php } ?>  
                                 </div>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">id undangan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="id_undangan" value="<?php echo $id_undangan?>" disabled required>
                                </div>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="nama1" required>
                                </div>
                                 <div class="mb-3" required>
                                    <label for="password" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
                                </div>

                                 <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                            
                            </form>
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
        <script src="../assets/js/vendor.min.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/js/verify.js"></script>
        <!-- third party js -->
        <script src="../assets/js/vendor/apexcharts.min.js"></script>
        <script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="../assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
    </body>
</html>
