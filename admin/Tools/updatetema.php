<?php


include "../../config.php";

                $id_user = mysqli_real_escape_string($conn, $_GET['id_kategori']);
                $name = mysqli_real_escape_string($conn, $_POST['nama']);

                
            
             $sql = "UPDATE kategori SET nama='".$name."' WHERE id_kategori=".$id_user."";
             $result = mysqli_query($conn, $sql);
            

             if($sql){
                echo "<script>alert('Data telah diperbarui');document.location.href='../List.php'</script>/n";
             }else{
                echo "<script>alert('Perbarui Gagal');document.location.href='edit.php'</script>/n";
             }

?>
