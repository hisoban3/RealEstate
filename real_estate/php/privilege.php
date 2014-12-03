<?php 
	$role_code	= $_SESSION['USR_ROLE'];
	
	require_once('config.php');	
	
	$qry 	= "SELECT * FROM mob_privileges WHERE prv_type = '$priv_type' AND rol_id = '$role_code'";		
	
	$result = mysql_query($qry);
	$priv	= mysql_num_rows($result);
	
	if ($priv < 1)
	{
		header("location: home.php");
	}
?>

