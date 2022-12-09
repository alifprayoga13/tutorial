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
    


     $id_tamu = $_GET['id_tamu'];

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   
   require '../../vendor/autoload.php';
   require '../../vendor/phpqrcode/qrlib.php';
   include '../../config.php';

   

   $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
    
   if (mysqli_num_rows($query) > 0) {
      $gege = mysqli_fetch_assoc($query);
   }  
    

   $pesan = "";
   
   if (isset($_POST['submit']) ) {



    $namatamu = mysqli_real_escape_string($conn, $_POST['nama']);
    $emailtamu = mysqli_real_escape_string($conn, $_POST['email']);        
    $qr = mysqli_real_escape_string($conn, md5(rand()));

    $code = $qr;
    $file = "../../upload/qrcode-img/".$qr.".png";

    $ecc = 'L';
    $pixel_size = 10;
    $frame_size = 10;
        $insert = mysqli_query($conn, "UPDATE `tamu` SET `id_tamu`='$id_tamu',`nama`='$namatamu',`email`='$emailtamu', `QR_Code`='".$code."' WHERE id_tamu = '".$id_tamu."'");    
        ;
   
        if ($insert) {
            QRcode::png($code, $file, $ecc, $pixel_size, $frame_size);
   $mail = new PHPMailer(true);
   
   try {
      //Server settings
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'anonymoyan@tutanota.com';                     //SMTP username
      $mail->Password   = '4tbjwHVa3zcXY5kN';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   
      //Recipients
      $mail->setFrom('KnoyanReply@foragikitsune.my.id');
      $mail->addAddress($emailtamu);
   
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Undangan';
      $mail->Body    = '<p style="text-align: center;">Click link untuk melihat undangan</p>
      
      <b><a href="http://localhost/tutorial/Undangan.php?tamu='.$id_tamu.'"> http://localhost/tutorial/Undangan.php?id_tamu='.$id_tamu.'</a></b>';
   
      $mail->send();
      echo '';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
      echo "</div>";
      $pesan = "<div class='alert alert-info'>Undangan dikirim ke email tamu.</div>";
   } else {
      $pesan = "<script>HAHAHAHAHAAH</script>";
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
                <a href="index.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="../assets/images/users/Logo_dark.png" alt="" height="46">
                    </span>
                    <span class="logo-sm">
                        <img src="../assets/images/users/logo_sm_dark.png" alt="" height="46">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Admin Settings</li>

                        <li class="side-nav-item">
                            <a  href="../User.php"  class="side-nav-link">
                                <i class="uil-home"></i>
                                <span> Home </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="../Undangan.php" class="side-nav-link">
                                <i class="uil-envelope"></i>
                                <span> Undangan</span>
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
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        <span><h1 class="page-title">Konfirmasi</h1></span>
                        <br>

                       

               
                <div class="container">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <form action="" method="POST">
                        <?php

                        $query2 = mysqli_query($conn, "SELECT * FROM tamu WHERE id_tamu = '$id_tamu'");
                        while ($row2 = mysqli_fetch_array($query2))
                        {

                        ?>
                     <div class="form-group">
                           <label>Nama Tamu</label>
                           <input class="form-control" type="text" name="nama" required  value="<?php echo $row2["nama"]?>">
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input class="form-control" type="email"  name="email"  value="<?php echo $row2["email"]?>">
                        </div>
                        <div class="form-group text-center">
                           <button class="btn btn-primary account-btn" name="submit" type="submit">Kirim</button>
                        </div>
                     </form>
                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
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
