<?php

include "../../config.php";

if(isset($_GET['id_undangan']))
{
    $id_undangan = $_GET['id_undangan'];
    mysqli_query($conn,"DELETE FROM susunan WHERE id_undangan='$id_undangan'") or die(mysqli_error());
    mysqli_query($conn,"DELETE FROM undangan WHERE id_undangan='$id_undangan'") or die(mysqli_error());

    echo "<script>alert('data berhasil di hapus');document.location.href='../Undangan.php'</script>";
}elseif(isset($_GET['id_susunan']))
{
    $id_undangan= $_GET['undangan'];
    $id_susunan= $_GET['id_susunan'];
    mysqli_query($conn,"DELETE FROM susunan WHERE id_susunan='$id_susunan'") or die(mysqli_error());
    echo "<script>alert('data berhasil di hapus');document.location.href='daftarsusunan.php?id_undangan=".$id_undangan."'</script>";
}else{
    die("ERROR");
}




?>