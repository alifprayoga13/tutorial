<?php
session_start();
error_reporting(0);
    if ($_SESSION['Level'] == "Admin") {
    header("Location: admin/index.php");
} elseif ($_SESSION['Level'] == "User") {
    header("Location: user/index.php");
} elseif (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    die();
}

    include 'config.php';
    $msg = "";

    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: index.php");
        }
    }

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT * from users where email='$email' and password='$password';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (empty($row['code'])) {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: welcome.php");
            } else {
                $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
        }
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
                            <h1>Yuk buat undangan</h1>
                            <ul class="list-unstyled l-social">
                                <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li><a href="https://www.linkedin.com/feed/"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                <li><a href="https://twitter.com/home"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   
                    <form action="" method="post" class="col-lg-12">
                    <?php echo $msg; ?>
                        <h5 class="title">Sign in</h5>
                        <div class="form-group form-float">
                            <div class="form-line">
                            <input type="email" class="form-control" name="email" required>

                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button name="submit" name="submit" class="btn btn-raised btn-secondary waves-effect w-100" style="border-radius: 10px;" class="btn" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="col-lg-12 m-t-20">
                        <P>Not on here yet?<a class="m-3" href="Register.php">Sign Up</a></P>
                        <P>Lupa Password?<a class="m-3" href="ForgotPassword.php">Forgot Password</a></P>
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