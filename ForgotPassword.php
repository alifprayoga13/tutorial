
<?php

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: index.php");
    die();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

        if ($query) {        
            echo "<div style='display: none;'>";
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'anonymoyan@tutanota.com';                     //SMTP username
                    $mail->Password   = 'xsmtpsib-1011b000e4813ba86e48f16a64f0d61afd31c15cd360e6072b5e5df94a2f65a3-UzsE3Ch6QtIRybJ4';                               //SMTP password           //Enable implicit TLS encryption
                    $mail->Port       = 587;        
                    $mail->SMTPSecure = 'tls';                         //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('NoReplyKnoyan@foragikitsune.my.id');
                    $mail->addAddress($email);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'no reply';
                $mail->Body    = 'Here is the verification link <b><a href="http://localhost/tutorial/change-password.php?reset='.$code.'">http://localhost/tutorial/change-password.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";        
            $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
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
    <link rel="stylesheet" href="assets/css/Register.css">
    <link rel="stylesheet" href="assets/css/Responsive.css">
</head>

<body class="">
    <div class="authentication">
        <div class="card" style="margin-left: -150px;">
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
                    <?php echo $msg; ?>
                    <form action="" method="post" class="col-lg-12">
                        <h5 class="title">Forgot Password</h5>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control username" required>
                                <label class="form-label">Email</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" value="submit" name="submit" class="btn btn-raised btn-secondary waves-effect w-100" style="border-radius: 10px;">Submit</button>
                        </div>
                    </form>
                    <div class="col-lg-12 m-t-20">
                        <P>Remember the password?<a class="m-3" href="index.php">Back</a></P>
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