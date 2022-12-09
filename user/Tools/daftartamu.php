<?php
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

include "../../config.php";

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
                        <span><h1 class="page-title">Undangan Maintenance</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                        <div class="container">
                            <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Judul</th>
                                                            <th scope="col">User</th>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                      if(isset($_GET['id_undangan'])){
                                                        $id_user=$_GET['id_undangan'];
                            
                                                        if(empty($id_user))
                                                        {
                                                            echo "ID Tidak Ada";
                                                        }
                                                    }else
                                                    {
                                                        die("ID Tidak Ada");
                                                    }
                                                    $sql2 = "SELECT * from tamu where id_undangan = ".$id_user."";
                                                    $result2 = mysqli_query($conn,$sql2);
                                                    while ($row2 = mysqli_fetch_array($result2))
                                                    {?>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $row2["id_undangan"]?></th>
                                                            <td><?php echo $row2["nama"]?></td>
                                                            <td><?php echo $row2["email"]?></td>
                                                            <td>
                                                                
                                                                <a href="./kirimtamu.php?id_undangan=<?php echo $row2['id_undangan'];?>&id_tamu=<?php echo $row2['id_tamu'];?>">Kirim Tamu</a> 
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                    <?php } ?>
                                                    <a href="tambahtamu.php?id_undangan=<?php echo $_GET['id_undangan']?>" class="btn btn-primary">Tambah Tamu</a>  
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
<?php } ?>