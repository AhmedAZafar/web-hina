<?php

session_start();


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









	//$hpwd=password_hash($pwd, PASSWORD_DEFAULT);


    if($pass==$confirmedpassword)
      {

    include('config.php');
$sql="UPDATE users SET fullname='$fullname', username='$username', bussinessemail='$bussinessemail', phoneno='$phoneno', companyname='$companyname', address='$address' , password='$pass', confirmedpassword='$confirmedpassword'  where id='{$_SESSION['id']}'";
$result=mysqli_query($conn,$sql);
header("location:EventPlanner_Profile.php");

      }
      else 
	 
      echo '<script>alert("Password Not Matched")</script>';
	
	 
}
?>

