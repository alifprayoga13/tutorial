<?php


include "../../config.php";

                $id_user = mysqli_real_escape_string($conn, $_GET['id_user']);
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn,md5($_POST['password']));
                $level = mysqli_real_escape_string($conn, $_POST['level']);
                
            
             $sql = "UPDATE users SET name='".$name."',password='".$password."',email='".$email."',level='".$level."' WHERE users.id_user=".$id_user."";
             $result = mysqli_query($conn, $sql);
            

             if($sql){
                echo "<script>alert('Data telah diperbarui');document.location.href='../Daftaruser.php'</script>/n";
             }else{
                echo "<script>alert('Perbarui Gagal');document.location.href='edit.php'</script>/n";
             }

?>
