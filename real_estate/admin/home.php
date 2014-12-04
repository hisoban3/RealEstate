<?php
	require_once('auth.php');
?>

<?php 
	require('includes/header.php');
	require('includes/mainmenu.php');
	require('includes/leftmenu.php');
?>
<div id="container">
	<div id="content">
		<div class="activities_s">
			<div class="block_label">
				Viewer Activities<span>54854</span>
			</div>
			<div class="activities_chart">
				<span class="activities_chart">100,150,130,100,250,280,350,250,400,450,280,350,250,400,</span>
			</div>
		</div>
		<div class="activities_s">
			<div class="block_label">
				THEATRE Rate<span>80%</span>
			</div>
			<div class="visit_chart">
				<span class="activities_chart">500,450,100,500,550, 400,300,550,480,500,320,400,450</span>
			</div>
		</div>
		
		<div class="views_s">
			<div class="block_label">
				Paid Owners<span>150</span>
			</div>
			<span class="badge_icon bank_sl"></span>
		</div>
		<div class="user_s">
			<div class="block_label">
				New Owner's<span>120</span>
			</div>
			<span class="badge_icon customers_sl"></span>
		</div>
	</div>		
</div>
		<span class="clear"></span>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
 <?php

	//require_once 'header.php';
	include('../connection.php');
	error_reporting(0);

	$username = $_SESSION['username'];
	$result = mysql_query("SELECT * FROM administrator where username='".$username."'");

	if (mysql_num_rows($result) != 0)  {
		while($row = mysql_fetch_array($result)) {
			$firstname=$row['firstname'];  }
	}
?>
<body>
<p align="center" class="style1">Login successfully </p>
<p align="center">This page is the home, you can put some stuff here......</p>
<p align="center"><a href="index.php">logout</a></p><?php echo $firstname; ?>
</body>
</html>