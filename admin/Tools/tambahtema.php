<?php
   session_start();

   if($_SESSION['level']=="") {
      header("Location: ../admin/index.php");
  }
  
  elseif ($_SESSION['level']=="user") {
      header("Location: ../user/index.php");
  }
  elseif (!isset($_SESSION['SESSION_EMAIL'])) {
      header("Location: ../index.php");
      die();
  }
   
   include '../../config.php';

   $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$_SESSION['SESSION_EMAIL']}'");
   
   if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_assoc($query);
   }

   $pesan = "";
$msg="";
if(isset($_POST['submit'])){
	$fileName=$_FILES['file']['name'];
	$fileNameArr=explode(".",$fileName);
	if($fileNameArr[count($fileNameArr)-1]=='zip'){
		$fineName=$fileNameArr[0];
		$zip=new ZipArchive();
		if($zip->open($_FILES['file']['tmp_name'])===TRUE){
			$name= $_POST["namatema"];
			$zip->extractTo("../../theme/test/$name");
			$zip->close();
			$files=scandir("../../theme/$name/$fineName/");
		}else{
			$msg="Semething went wrong";
		}
	}else{
		$msg="Please select zip file";
	}
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
                            <form method="post" autocomplete="off" enctype="multipart/form-data">
                                <div class="mb-3" required>
                                    <label for="Email" class="form-label">Nama Tema</label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="namatema" required>
                                </div>
                                 <div class="mb-3" required>
                                    <label for="password" class="form-label">Upload Zip</label>
                                    <input class="form-control" type="file" id="formFile" name="file" accept=".zip,.rar,.7zip" required>
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