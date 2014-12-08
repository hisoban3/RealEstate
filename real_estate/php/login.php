<?php
$_SESSION['count']=0;
session_start();
$username = "";
$password = "";
$error 	  = "";

require_once('config.php');	

	$username	= $_REQUEST['luname'];
	$password	= $_REQUEST['lpw'];
	$fill       = $username !="" && $password !="";

		$qry1 	 = "SELECT * FROM login WHERE login_username = '$username' AND login_password = '$password'";
		$result1 = mysql_query($qry1);
		$count1	 = mysql_num_rows($result1);

		$qry2 	 = "SELECT * FROM customers WHERE uname = '$username' AND password = '$password'";
		$result2 = mysql_query($qry2);
		$count2	 = mysql_num_rows($result2);

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
			header("location: ../admin.php"); // Redirecting To Admin Page
			exit();

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
			header("location: ../employee.php"); // Redirecting To Other Page
			exit();

		} else {
			$_SESSION['error'] = "Invalid User Name or Password";
			header('Location: ../index.php');
		}
?>