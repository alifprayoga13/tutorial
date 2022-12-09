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
                        <span><h1 class="page-title">Undangan Maintenance</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                        <div class="container">
                            <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <a href="./form/" class="btn btn-primary mb-3">Tambah Undangan</a>  
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
                                                    $sql2 = "SELECT * from undangan where id_user = ".$row["id_user"]."";
                                                    $result2 = mysqli_query($conn,$sql2);
                                                    while ($row2 = mysqli_fetch_array($result2))
                                                    {?>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><?php echo $row2["Judul"]?></th>
                                                            <td><?php echo $row2["id_user"]?></td>
                                                            <td><?php                                                         
                                                             if (empty($row2['tgl_acara'])) {
                                                                echo $row2["tgl_resepsi"];
                                                            } else {
                                                                echo $row2["tgl_acara"];;
                                                            }
                                                            ?></td>
                                                            <td>
                                                                
                                                                <a href="./Tools/daftartamu.php?id_undangan=<?php echo $row2['id_undangan'];?>">Daftar Tamu</a> |
                                                                <a href="./Tools/delete.php?id_undangan=<?php echo $row2['id_undangan'];?>" onclick="return confirm('apakah kamu yakin?')">Delete</a> |
                                                                <a href="../Redirect.php?id_tema=<?php echo $row2['id_kategori']; ?>&id_undangan=<?php echo $row2['id_undangan'];?>"">Lihat</a> |
                                                                <a href="./Tools/daftarsusunan.php?id_undangan=<?php echo $row2['id_undangan'];?>">Susunan</a> |
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                    <?php } ?>
                                                    
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
                <?php @include 'Footer.php'?>

<?php } ?>