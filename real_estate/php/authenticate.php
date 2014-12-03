<?php 
	session_start();
	if(!isset($_SESSION['USR_CODE']) || (trim($_SESSION['USR_CODE']) == '')) 
	{
		$_SESSION['USR_CODE'] = 0;
	}
	
	if ($_SESSION['USR_CODE'] == 0)
	{require_once('php/logout.php');
		header("location: home.php");
	}
?>
