<?php
include("includes/config.php");
 $id = $_GET['id'];
 $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
		if ($conn->connect_error) {
		trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
		}


		$sql = "UPDATE bookings SET approved = '1'  WHERE id='$id'";
if ($conn->query($sql)==false) 
	{
		$_SESSION['approve']= "Failed to approve booking";
	}
	else
	{
		$_SESSION['delete']= "booking approved Successfully";
		header("location:Vendor-bookings.php");	
	}
?>
