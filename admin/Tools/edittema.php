<?php
            include "../../config.php";
                        if(isset($_GET['id_kategori'])){
                            $id_user=$_GET['id_kategori'];

                            if(empty($id_user))
                            {
                                echo "ID Tidak Ada";
                            }
                        }else
                        {
                            die("ID Tidak Ada");
                        }
                        $query = "SELECT * FROM kategori WHERE id_kategori='$id_user'";
                        $sql = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array($sql))
                        {
                            $names=      $row["nama"];
                        
                        }
                        ?>
                        
<?php @include 'header.php'?>
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
                            <form method="post" action="updatetema.php?id_kategori=<?php echo $id_user?>">
                                <div class="mb-3"  required>
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $names?>" required>
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