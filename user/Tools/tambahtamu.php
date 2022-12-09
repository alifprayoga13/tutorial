<?php
   session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
      header("Location: ../index.php");
      die();
  }
   
   if(isset($_GET['id_undangan'])){
      $id_undangan=$_GET['id_undangan'];

      if(empty($id_undangan))
      {
          echo "ID Tidak Ada";
      }
  }else
  {
      die("ID Tidak Ada");
  }
   include '../../config.php';

   $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
   
   if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_assoc($query);
   }

   $pesan = "";
   
   if (isset($_POST['submit'])) {  
      $nama_tamu = mysqli_real_escape_string($conn, $_POST['nama1']);        
      $email_tamu = mysqli_real_escape_string($conn, $_POST['email']);  
      $id_undangan = mysqli_real_escape_string($conn, $_GET['id_undangan']);        



         $insert = "INSERT INTO `tamu` (`id_tamu`, `nama`, `id_undangan`, `email`) VALUES (NULL, '".$nama_tamu."', '".$id_undangan."','".$email_tamu."');";
        
          mysqli_query($conn, $insert);
          echo "<script>alert('berhasil')</script>";
          header("Location: daftartamu.php?id_undangan=".$id_undangan."");
        
      }
         
   
   
   ?>


<?php @include 'header.php'?>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        <span><h1 class="page-title">Tambah Tamu</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                      

        <div class="container mt-5">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form method="post" autocomplete="off">
                                <div class="mb-3"  required>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="nama1" required>
                                </div>
                                 <div class="mb-3" required>
                                    <label for="password" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
                                </div>

                                 <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                            
                            </form>
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