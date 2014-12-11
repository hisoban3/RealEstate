<?php
	require_once 'includes/header.php';
	include("includes/connection.php");

	if (isset($_POST['submit'])){
	    $firstname		= $_POST['firstname'];
	    $lastname       = $_POST['lastname'];
	    $username       = $_POST['username'];
	    $email			= $_POST['email'];
		$password 		= $_POST['password'];
	    $pno			= $_POST['pno'];

	    $encrypted_password = md5($password);

		mysql_query("insert into login (fname,lname,email,login_username,login_password,pno)
					values('$firstname','$lastname','$email','$username','$encrypted_password','$pno')"
					)or die(mysql_error());

		include 'index.php';
	}
?>		








	
	
	
	
	
	
	
	
	