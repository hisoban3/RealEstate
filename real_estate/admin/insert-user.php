<?php
	require_once 'includes/header.php';
	include("includes/connection.php");

	if (isset($_POST['submit'])){
	    $firstname		= $_POST['firstname'];
	    $lastname       = $_POST['lastname'];
	    $email			= $_POST['email'];
		$login_username = $_POST['login_username'];
		$login_password = $_POST['login_password'];
	    $pno			= $_POST['pno'];

		mysql_query("insert into login (fname,lname,email,login_username,login_password,pno)
					values('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[login_username]',
					'$_POST[login_password]','$_POST[pno]')")or die(mysql_error());

		include 'index.php';
	}
?>		








	
	
	
	
	
	
	
	
	