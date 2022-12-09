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
        <div class="container">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form method="post" action="update.php?id_user=<?php echo $id_user?>">
                                <div class="mb-3"  required>
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $names?>" required>
                                </div>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" name="email" value="<?php echo $email?>" required>
                                </div>
                                 <div class="mb-3" required>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                </div>
                                 <div class="mb-3" required>
                                    <label for="Email" class="form-label">level</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="level" value="<?php echo $level?>" required>
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
                <?php @include 'header.php'?>