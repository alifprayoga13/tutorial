<?php

include "../../config.php";

$get_id = $_GET["nama"];

$sql = "SELECT * FROM `undangan` WHERE `id_undangan` = ".$get_id." and id_kategori = 1;";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){

        



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $row["Nama_Mempelai_Pria"]?> & <?php echo $row["Nama_Mempelai_Wanita"]?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="../../upload/perkawinan/<?php echo $row["foto"]?>" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4"><?php echo $row["Nama_Mempelai_Pria"]?> & <?php echo $row["Nama_Mempelai_Wanita"]?></h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">We're getting married</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->
    <div class="container row rounded border-0 text-center mx-auto d-flex justify-content-center p-0 mb-5 pb-5">
    <h1 class="font-secondary display-4 text-center  ">Susunan Acara</h1>
    <?php 
            $sql2 = "SELECT * from susunan where id_undangan=$get_id";
            $result2 = mysqli_query($conn,$sql2);
            while ($row2 = mysqli_fetch_array($result2))
            {?>
            <p class="card-text text-center" ><?php echo $row2["acara"]?> </p>
            <?php } ?>
    </div>

   <!--Lokasi Start-->
    <div class="container row rounded border-0 text-center mx-auto d-flex justify-content-center p-0 mb-5 pb-5">
    <h1 class="font-secondary display-4 text-center ">Lokasi</h1>
    <br>
        <div class="card col-md">
        <div class="mapouter card-title"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas card-title" src="https://maps.google.com/maps?q=<?php echo $row["lokasi_akat"]?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas 
        {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        <br>
            <h3 class="card-title">Akad Nikah</h3>
            <br>
            <p class="card-text"><?php echo $row["lokasi_akat"]?></p>
            <br>
            <p class="card-text"><?php echo $row["tgl_akat"]?></p>
            <br>
            <a href="<?php echo $row["maps_akat"]?>" class="btn btn-primary">Open Google Maps</a>
        </div>
        <div class="card col-md">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas card-title" src="https://maps.google.com/maps?q=<?php echo $row["lokasi_akat"]?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas 
        {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        <br>
            <h3 class="card-title">Resepsi Nikah</h3>
            <br>
            <p class="card-text"><?php echo $row["lokasi_resepsi"]?></p>
            <br>
            <p class="card-text"><?php echo $row["tgl_resepsi"]?></p>
            <br>
            <a href="<?php echo $row["Maps_Repsepsi"]?>" class="btn btn-primary">Open Google Maps</a>
        </div>
    </div>


   <!--Lokasi End-->

    <!--Lokasi Detail-->
    <div class="container p-0 mb-5 pb-5">
    <h1 class="font-secondary display-4 text-center ">Lokasi Detail</h1>
  
    <iframe  src="https://maps.google.com/maps?q=<?php echo $row["lokasi_akat"]?>&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1110" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class="container p-0 mb-5 pb-5">
    <h1 class="font-secondary display-4 text-center ">Konfirmasi Kehadiran</h1>
  
    <p class="card-text text-center subtitle">
        <br>
                Merupakan suatu kehormatan dan kebahagiaan bagi kami
                <br>
                apabila Bapak/Ibu/Saudara/Saudari berkenan hadir <br>
                Menghadiri acara Pernikahan <b><?php echo $row["Nama_Mempelai_Pria"]?> & <?php echo $row["Nama_Mempelai_Wanita"]?></b>
                <br>
                <br>
                Jika bisa hadir silakan menuju Yang buat untuk scan QR Code 
                <br>
                --QR Section--
                <br>
                <br>
                <br>
                Jika tidak memungkinkan untuk hadir di acara Ulang Tahun kami,tidak mengapa,
                <br> 
                semoga bisa berjumpa di lain kesempatan
                <br>
                <br>
                Stay safe & jaga kesehatan ya :)
                </p>
        </div>

        <h1 class="font-secondary display-4 text-center ">Terima Kasih</h1>
        <br>
    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<?php     
    }

?>