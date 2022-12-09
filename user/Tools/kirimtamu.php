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
<?php @include 'header.php'?>
               
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

                <?php @include 'footer.php'?>