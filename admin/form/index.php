
<?php


if(isset($_POST['submit']))
{
   
    if($_POST["pilih"]==1){
        $link = "./wisuda.php";       
    }else if($_POST["pilih"]==2){
        $link = "./ulangtahun.php";
    }elseif($_POST["pilih"]==3) {
        $link = "./pernikahan.php?";
    }
    header("Location:".$link);
}

?>
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<?php @include 'header.php'?>
<div class="container">
    <h1 class="text-center">Pilih Category</h1>
    <p class="text-center">Silakan pilih Category untuk melanjutkan form</p>
    <br>
    <form action="" method="Post">
    <select name="pilih" class="form-select" aria-label="Default select example">
        <option selected>Pilih Category</option>
        <option value="1" >Wisuda</option>
        <option value="2" >Ulang Tahun</option>
        <option value="3" >Pernikahan</option>
    </select>
    <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <?php @include 'footer.php'?>