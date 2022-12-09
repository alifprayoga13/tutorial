<?php 
include "../config.php";
session_start();

if($_SESSION['level']=="") {
    header("Location: ../admin/index.php");
}

elseif ($_SESSION['level']=="petugas") {
    header("Location: ../user/index.php");
}
elseif (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();

    
} 
?>
<?php @include 'header.php'?>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        <span><h1 class="page-title">Tema Maintenance</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                        <div class="container">
                            <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="./Tools/tambahtema.php" class="btn btn-primary">Tambah Tema</a>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama Tema</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    <?php 
                                                    include "../config.php";;
                                                            $sql = "SELECT * from kategori";
                                                            $result = mysqli_query($conn,$sql);
                                                            while ($row = mysqli_fetch_array($result))
                                                            {?>
                                                        <tr>
                                                            <th scope="row"><?php echo $row["id_kategori"]?></th>
                                                            <td><?php echo $row["nama"]?></td>
                                                            <td>
                                                            <a href="./Tools/edittema.php?id_kategori=<?php echo $row['id_kategori'];?>">Edit</a> |
                                                                <a href="./Tools/delete.php?id_kategori=<?php echo $row['id_kategori'];?>" onclick="return confirm('apakah kamu yakin?')">Delete</a> 
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>  
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