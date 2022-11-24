<?php
error_reporting(0);
session_start();
if ($_SESSION['level'] == "admin") {
    header("Location: admin/index.php");
} elseif ($_SESSION['level'] == "petugas") {
    header("Location: user/index.php");
}


?>
<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Happy Wedding::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/Responsive.css">
</head>

<body class="">
    <div class="authentication">
        <div class="card" style="position: absolute">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header slideDown">
                            <div class="logo"><img src="assets/images/logo 1.png" alt=""></div>
                            <h1>Happy Wedding</h1>
                            <ul class="list-unstyled l-social">
                                <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="https://www.linkedin.com/feed/"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                <li><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <form action="save_Register.php" method="post" class="col-lg-12">
                        <h5 class="title">Register</h5>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="username" class="form-control" required>
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control" required>
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                    
                        <div class="col-lg-12">
                            <button type="submit" value="login" name="login" class="btn btn-raised btn-secondary waves-effect w-100" style="border-radius: 10px;">Register</button>
                        </div>
                    </form>
                    <div class="col-lg-12 m-t-20">
                        <P>Not on here yet?<a class="m-3" href="forgot.php">Sign In</a></P>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>