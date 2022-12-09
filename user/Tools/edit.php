<?php
            include "../../config.php";
                        if(isset($_GET['id_user'])){
                            $id_user=$_GET['id_user'];

                            if(empty($id_user))
                            {
                                echo "ID Tidak Ada";
                            }
                        }else
                        {
                            die("ID Tidak Ada");
                        }
                        $query = "SELECT * FROM users WHERE id_user='$id_user'";
                        $sql = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array($sql))
                        {
                            $names=      $row["name"];
                            $email=     $row["email"];
                            $password=  $row["password"];
                            $level=     $row["level"];
                        
                        }
                        ?>
                        
<?php @include 'header.php'?>
            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                     
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="../assets/images/ellipse.png" alt="user-image" class="rounded-circle">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Sign In</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Sign Up</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Register</span>
                                    </a>
                                    
                                    <!-- item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        <span><h1 class="page-title">Update</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                      

        <div class="container">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form method="post" action="update.php?id_user=<?php echo $id_user?>">
                                <div class="mb-3"  required>
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $names?>">
                                </div>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" name="email" value="<?php echo $email?>">
                                </div>
                                 <div class="mb-3" required>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo $password?>">
                                </div>
                                 <div class="mb-3" required>
                                    <label for="Email" class="form-label">level</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="level" value="<?php echo $level?>">
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