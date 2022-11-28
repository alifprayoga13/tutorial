<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email    = $_POST['email'];
$level    = $_POST['level'];
if (isset($_POST['login'])){
                $insert = mysqli_query($conn, "INSERT INTO user (username, password, email, level) 
                VALUES('$username', '$password', '$email', '$level')");
                if($insert = TRUE)
                {
                    echo "<script>alert('Register Berhasil !!!');document.location.href='index.php'</script>";
                }else {
                    echo "<script>alert('Register Gagal !!!');document.location.href='Register.php'</script>";
                }
            }else{
                echo "<script>alert('Username Telah Digunakan !!!');document.location.href='Register.php'</script>";
            }
?>