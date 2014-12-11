<?php
	$_SESSION['count']=0;
	session_start();
	$username = "";
	$password = "";
	$error 	  = "";

	require_once 'connection.php';

	// $username	= $_REQUEST['luname'];
	// $password	= $_GET['lpw'];

	$username = mysql_real_escape_string($_REQUEST['luname']);
	$password = mysql_real_escape_string($_REQUEST['lpw']);

	$encrypted_password = md5($password);

	// $fill       = $username !="" && $password !="";

		$qry1 	 = "SELECT * FROM login WHERE login_username = '$username' AND login_password = '$encrypted_password'";
		$result1 = mysql_query($qry1);
		$count1	 = mysql_num_rows($result1);

		$qry2 	 = "SELECT * FROM customers WHERE uname = '$username' AND password = '$encrypted_password'";
		$result2 = mysql_query($qry2);
		$count2	 = mysql_num_rows($result2);

		// print_r($count2); die();

		// Dashboard - Admin Panel
		if ($count1 == 1) {

			$row = mysql_fetch_array($result1, MYSQL_ASSOC);

			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$pno   = $row['pno'];

			// Initializing Session
			$_SESSION['USR_FNAME'] = $fname;
			$_SESSION['USR_LNAME'] = $lname;
			$_SESSION['USR_EMAIL'] = $email;
			$_SESSION['USR_PHONE'] = $pno;
			$_SESSION['USR_NAME']  = $username;
			$_SESSION['USR_UPW']   = $password;

			$_SESSION['count']++;
			mysql_close($connection);
			header("location: ../dashboard.php"); // Redirecting To Admin Page
			exit();
		// End Dashboard - Admin Panel


		// Customers Page
		} else if($count2 == 1) {

			$row = mysql_fetch_array($result2, MYSQL_ASSOC);

			$fname = $row['fname'];
			$lname = $row['lname'];
			$email = $row['email'];
			$pno   = $row['pno'];

			$_SESSION['USR_FNAME'] = $fname;
			$_SESSION['USR_LNAME'] = $lname;
			$_SESSION['USR_EMAIL'] = $email;
			$_SESSION['USR_PHONE'] = $pno;
			$_SESSION['USR_NAME']  = $username;
			$_SESSION['USR_UPW']   = $password;

			$_SESSION['count']++;
			mysql_close($connection);
			header("location: ../../customerPage.php"); // Redirecting To Other Page
			exit();

		} else {
			$_SESSION['error'] = "Invalid User Name or Password";
			header('Location: ../../index.php');
		}
?>