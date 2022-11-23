<?php
$host = "localhost";
$user = "root";
$pass = "";
$namadb = "multi_user";

$conn = mysqli_connect($host, $user, $pass, $namadb);
if (!$conn) {
	die("Error".mysqli_connect_error());
}

?>	