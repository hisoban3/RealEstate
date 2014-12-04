<?php
	session_start();	
	require_once 'header.php';

	if(!isset($_SESSION['USR_NAME'])) {
		require_once 'login.php';
	} else {
		header("location: ../admin/dashboard.php");
	}
?>
</body>
</html>