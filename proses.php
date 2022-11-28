<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) 
{
	$username = addslashes(trim($_POST['email']));
	$password	= md5($_POST['password']);

	$query = mysqli_query($conn, "SELECT * FROM user WHERE email='$username' AND password='$password' ");
	if (mysqli_num_rows($query) == 0) 
	{
		echo "<script>alert('Username atau Password yang Anda masukan salah !!!');document.location.href='index'</script>/n";
	}else{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']	= $row['username'];
		$_SESSION['level']  = $row['level'];
		
		if($row['level'] == "admin")
		{	
			echo "<script>alert('Welcome To Administrator!');document.location.href='admin/'</script>/n";
		}
		else if($row['level'] =="user")
		{
			echo "<script>alert('Welcome To user !');document.location.href='user/'</script>/n";
		}
		else
		{
			echo "<script>alert('Login Gagal !!!');document.location.href='index'</script>/n";
		}
	}
}else{
	echo "<script>alert('Anda belum mengisi Form !!!');document.location.href='index'</script>/n";
}



?>