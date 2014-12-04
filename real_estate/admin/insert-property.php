<?php
	
	require_once 'includes/header.php';
	include("includes/connection.php");
	if (!isset($_FILES['image']['tmp_name'])) {
		echo "";
	}
	
	else{
		$file       = $_FILES['image']['tmp_name'];
		$image      = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
			
		move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
		
		
        $propertyname     = $_POST['propertyname'];
		$propertycategory = $_POST['propertycategory'];
		$streetno         = $_POST['streetno'];
		$streetaddress    = $_POST['streetaddress'];
		$zipcode		  = $_POST['zipcode'];
		$city			  = $_POST['city'];
		$description      = $_POST['description'];
		$propertyprice    = $_POST['propertyprice'];
        $location 		  = "photos/" . $_FILES["image"]["name"];

        $save = mysql_query("INSERT INTO property (propertyname,propertycategory,streetno,
        					streetaddress,zipcode,city,description,propertyprice,location)
							VALUES ('$propertyname','$propertycategory','$streetno','$streetaddress',
							'$zipcode','$city','$description','$propertyprice','$location')");
		
		//header("location: busre.php");
		include 'dashboard.php';
		exit();
	}
?>		








	
	
	
	
	
	
	
	
	



