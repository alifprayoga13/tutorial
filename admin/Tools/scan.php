<?php
   session_start();
   
      
      if (!isset($_SESSION['SESSION_EMAIL'])) {
         header("Location: ./user_login.php");
         die();
      }
      
      
      require '../../config.php';
   
      $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
      
      if (mysqli_num_rows($query) > 0) {
         $row = mysqli_fetch_assoc($query);
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
                      

        <div class="container">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                        <div id="qr-reader2" style="width: 100%;"></div> 
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