<?php
include("includes/config.php");
 $id = $_GET['id'];
 $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
		if ($conn->connect_error) {
		trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
		}
 $sql="DELETE FROM bookings WHERE id='$id'";
	if ($conn->query($sql)==false) 
	{
		$_SESSION['delete']= "Failed to delete product";
	}
	else
	{
		$_SESSION['delete']= "Order deleted Successfully";
		header("location:Vendor-bookings.php");	
	}
?>
