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

?>
<?php @include 'header.php'?>
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <br>
                        <br>
                        <!-- start page title -->
                        <span><h1 class="page-title">User Maintenance</h1></span>
                        <br>
                        <!-- end page title -->
                        <!-- end row -->
                      
                        <div class="container mb-3">
                            <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Nama User</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Level</th>
                                                            <th scope="col">Code</th>
                                                            <th scope="col">Action</th>
                                                            </thead>
                                                        </tr>
                                                    <tbody>
                                                    <?php 
                                                            $sql = "SELECT * from users";
                                                            $result = mysqli_query($conn,$sql);
                                                            while ($row = mysqli_fetch_array($result))
                                                            {?>
                                                        <tr>
                                                            <td><?php echo $row["name"]?></td>
                                                            <td><?php echo $row["email"]?></td>
                                                            <td><?php echo $row["level"]?></td>
                                                            <td><?php 
                                                            if (empty($row['code'])) {
                                                                echo "Activate";
                                                            } else {
                                                                echo "Non-Active";
                                                            }
                                                            
                                                            ?>
                                                            </td>
                                                            <td>
                                                            <a href="./Tools/edit.php?id_user=<?php echo $row['id_user'];?>">Edit</a>
                                                            <a href="./Tools/delete.php?id_user=<?php echo $row['id_user'];?>" onclick="return confirm('apakah kamu yakin?')">Delete</a>
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

        <?php
            if (isset($_POST['submit'])){
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, md5($_POST['password']));
                $level = mysqli_real_escape_string($conn, $_POST['level']);
            
             $sql = "INSERT INTO users (name, email, Level, password) VALUES ('{$name}', '{$email}', '{$level}', '{$password}')";
             $result = mysqli_query($conn, $sql);
             header("Location: Daftaruser.php");
            }
            ?>
        <div class="container">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form method="post">
                                <h2>Tambah User</h2>
                                <hr>
                                <div class="mb-3"  required>
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                </div>
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" name="email">
                                </div>
                                 <div class="mb-3" required>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>
                                 <div class="mb-3" required>
                                    <label for="Email" class="form-label">level</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="level">
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