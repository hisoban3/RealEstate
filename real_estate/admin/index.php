<?php
	session_start();	
	if(!isset($_SESSION['USR_NAME'])) {
		require_once 'header.php';
		require_once 'login.php';
	} else {
		header("location: ../admin/dashboard.php");
	}
?>
</body>
</html>