<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
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
?>