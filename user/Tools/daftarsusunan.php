<?php 
include "../../config.php";
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
if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['acara']);



$sql = "INSERT INTO susunan (acara,id_undangan) VALUES ('".$name."','".$id_undangan."')";
$result = mysqli_query($conn, $sql);
function function_alert() { 
              
    // Display the alert box; note the Js tags within echo, it performs the magic
    echo "<script type='text/javascript'>alert('Berhasil ditambahkan');</script>";
} 

header("Location: daftarsusunan.php?id_undangan=".$id_undangan."");
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
                            <div class="col-lg-13 mb-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama Acara</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    <?php 
                                                    include "../../config.php";;
                                                            $sql = "SELECT * from susunan where id_undangan= $id_undangan";
                                                            $result = mysqli_query($conn,$sql);
                                                            while ($row = mysqli_fetch_array($result))
                                                            {?>
                                                        <tr>
                                                            <td scope="row"><?php echo $row["acara"]?></td>
                                                            <td>
                                                                <a href="delete.php?id_susunan=<?php echo $row['id_susunan'];?>&undangan=<?php echo $row['id_undangan'];?>" onclick="return confirm('apakah kamu yakin?')">Delete</a> 
                                                                </td>
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
                        </div>
                    </div>
                    
                                        <div class="container">
                                            <div class="col-lg-13">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">

                            <form method="post">
                                <h2>Tambah Acara</h2>
                                <hr>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Nama Acara</label>
                                    <input type="text" class="form-control" name="acara" required>
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