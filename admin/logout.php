<?php
	session_start();
	session_destroy();
	echo "<script>alert('Terima Kasih, Telah Membuka Undangan Ini!');document.location.href='../'</script>/n";
?>