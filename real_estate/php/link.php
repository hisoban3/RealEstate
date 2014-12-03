<?php
session_start();

if($_SESSION['USR_ROLE'] == 1)
{
header("location: ../admin.php");
}
if($_SESSION['USR_ROLE'] == 0)
{
header("location: ../regcustomer.php");
}
?>