<?php
	require_once 'includes/header.php';
	include("includes/connection.php");

	if (isset($_POST['submit'])){
		$pcategory=$_POST['pcategory'];

		mysql_query("insert into property_category (propertycategory)
		values('$_POST[pcategory]')")or die(mysql_error());
	 	echo"sucess";
		//	include 'index.php';
	}
?>		








	
	
	
	
	
	
	
	
	