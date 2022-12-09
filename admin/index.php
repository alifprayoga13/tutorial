﻿<?php
session_start();
if($_SESSION['level']=="") {
    header("Location: ../admin/index.php");
}

elseif ($_SESSION['level']=="user") {
    header("Location: ../user/index.php");
}
elseif (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();
}

include "../config.php";

$sql = "SELECT * from users where email='{$_SESSION['SESSION_EMAIL']}'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{
?>

<?php @include 'header.php'?>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        
                        <h1 class="page-title mb-3">Halo !! <br><?php echo $row["name"]?></h1>
                        <!-- end page title -->
                        <?php }?>
                       <?php
                        $sql = "SELECT COUNT(id_undangan)as knoyan FROM undangan ";
                        $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                       ?>
                        <!-- end row -->

                        <div class="container">
                            <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="card col-sm-2 mx-auto ">
                                            <div class="card-title text-center mt-3">
                                                <h1><?php echo $row["knoyan"]?></h1>
                                             </div>  
                                            
                                            <?php }?>
                                            <?php
                                            $sql = "SELECT COUNT(id_kategori)as knoyan FROM kategori ";
                                            $result = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                        ?>

                                             <div class="card-text text-center">
                                                <p>Total Undangan</p>
                                             </div>
                                        </div>
                                         <div class="card col-sm-2 mx-auto ">
                                            <div class="card-title text-center mt-3">
                                                <h1><?php echo $row["knoyan"]?></h1>
                                             </div>  

                                             <?php }?>
                                             <?php
                                            $sql = "SELECT COUNT(id_tamu)as knoyan FROM tamu ";
                                            $result = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                        ?>
                                             <div class="card-text text-center">
                                                <p>Kategori</p>
                                             </div>
                                        </div>
                                         <div class="card col-sm-2 mx-auto ">
                                            <div class="card-title text-center mt-3">
                                                <h1><?php echo $row["knoyan"]?></h1>
                                             </div>  
                                             <?php }?>
                                             <div class="card-text text-center">
                                                <p>Tamu Undangan</p>
                                             </div>
                                        </div>
                                       
                                        </div>  
                                        </div>
                                    </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                        <!-- end row -->
                    </div>
                    <!-- container -->
                       
                </div>
                <!-- content -->
                <?php @include 'footer.php'?>