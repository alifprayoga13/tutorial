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
 $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
   
 if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
 }
            if(isset($_POST["submit"]) && isset($_FILES['my_image'])){


                $img_name = $_FILES['my_image']['name'];
                $img_size = $_FILES['my_image']['size'];
                $tmp_name = $_FILES['my_image']['tmp_name'];
                $error = $_FILES['my_image']['error'];
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png"); 

                            $foto_mempelai = uniqid("IMG-", true).'.'.$img_ex_lc;
                            $img_upload_path = "../../upload/ultah/".$foto_mempelai;
                            move_uploaded_file($tmp_name, $img_upload_path);
                $judul = mysqli_real_escape_string($conn, $_POST['judul']);
                $nama = mysqli_real_escape_string($conn, $_POST['nama_org_ultah']);
                $umur = mysqli_real_escape_string($conn, $_POST['umur']);
                $nomor_panitia = mysqli_real_escape_string($conn, $_POST['nomor_panitia']);
                $nomor_pemilik = mysqli_real_escape_string($conn, $_POST['nomor_pemilik']);
                $tanggal = mysqli_real_escape_string($conn, $_POST['tgl_acara']);
                $lokasi_acara = mysqli_real_escape_string($conn, $_POST['lokasi_acara']);
                $jam = mysqli_real_escape_string($conn, $_POST['tgl_acara']);
                $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
            
             $sql =   "INSERT INTO `undangan`.`undangan` (`id_undangan`, `Judul`, `id_user`, `id_kategori`, `umur`, `nomor_panitia`, `tgl_acara`, `lokasi_acara`, `foto`, `nama_org_ultah`, `nomor_pemilik`, `jam`, `deskripsi` ) VALUES (NULL, '".$judul."', '".$row["id_user"]."', '3', '".$umur."', '".$nomor_panitia."','".$tanggal."','".$lokasi_acara."','".$foto_mempelai."','".$nama."','".$nomor_pemilik."','".$jam."','".$deskripsi."');";
             $result = mysqli_query($conn, $sql);
             header("Location: ../statusundangan.php");
            }

?>

<link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
<?php @include 'header.php'?>

    <div class="container">
    <h1 class="text-center">Lanjutkan Isi Form</h1>
    <p class="text-center">Lengkapi data dengan benar</p>
    <hr>
    <form method="post" enctype="multipart/form-data">
                    <div class="form-group form-float">
                           <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Nama</label>
                                    <input type="text" name="nama_org_ultah" class="form-control email" required>                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">umur</label>
                                    <input type="text" name="umur" class="form-control password"  required>                                
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                    <label class="form-label">Nomor Telepon Panitia</label>
                                    <input type="text" name="nomor_panitia" class="form-control" required>                                
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                            <div class="form-line">
                                <label class="form-label">Nomor Telepon Pemilik</label>
                                <input type="text" name="nomor_pemilik" class="form-control" required>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Tanggal Acara</label>
                                    <input type="date" name="tgl_acara" class="form-control email" required>                               
                                </div>
                            </div>
                            <div class="form-group form-float col-sm">
                                <div class="form-line">
                                <label class="form-label">Jam</label>
                                    <input type="time" name="jam" class="form-control email" required>                               
                                </div>
                            </div>
                        
                        </div>    
                        <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" name="lokasi_acara" class="form-control password"  required>                                
                                </div>
                            </div>
                        <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control"  required> </textarea>                               
                                </div>
                            </div>

          
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="my_image" accept="image/png, image/jpeg">
                </div>
                <div class="text-center">
                    <br>
                    <button class="btn btn-primary float-end " type="submit" value="Submit" name="submit">Submit</button> 
                </div>
            </form> 

    </div>

    
    <?php @include 'footer.php'?>