


<?php
include("includes/config.php");
 $id = $_GET['id'];
 $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
		if ($conn->connect_error) {
		trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
		}


 if (isset($_GET["action"])) {
 	 if ($_GET["action"] == "approve"){
 	 	$id =  $_GET["id"];
$sql = "UPDATE bookings SET status='approved'  WHERE id='$id'";
 

if ($conn->query($sql)==false) 
	{
		$_SESSION['approve']= "Failed to approve booking";
	}
	else
	{
		$_SESSION['approve']= "booking approved Successfully";
		header("location:Vendor-bookings.php");	
	}
}
}
?>
