<?php

if(isset($_POST['submit']))
{


	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$bussinessemail=$_POST['bussinessemail'];
	$phoneno=$_POST['phoneno'];
	$companyname=$_POST['companyname'];
	$address=$_POST['address'];
	$pass=$_POST['password'];
	$confirmedpassword=$_POST['confirmedpassword'];
	$type=$_POST['type'];







if($pass==$confirmedpassword)
{
	//$hpwd=password_hash($pwd, PASSWORD_DEFAULT);

	$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName );
	if ($conn->connect_error) {
	trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
}

 
      


$sql='INSERT INTO  users (fullname, username, bussinessemail , phoneno, companyname, address, password, confirmedpassword, type) VALUES (?,?,?,?,?,?,?,?,?)';
$stmt= $conn-> prepare($sql);
if($stmt == false)
{
	trigger_error('wrong sql in Insertion'. $conn->error);
}

$stmt->bind_param('sssisssss', $fullname, $username, $bussinessemail, $phoneno, $companyname, $address, $pass, $confirmedpassword, $type);
$stmt->execute();
$stmt->close();
$conn->close();
header('location:login.php?status=AC');
}
else
header('location:index.php?status=PNM'); 
}  
else
	echo "Not Submitted";




	
	
	if($type=='Vendor'){
	header("location:Vendor-Profile.php");}
	if($type=='Event Planner'){
	header("location:EventPlanner_Dashboard.php");}



?>
