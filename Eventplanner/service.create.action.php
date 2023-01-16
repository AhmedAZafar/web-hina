<?php
 session_start();
 if($_SESSION['username']==NULL)
 {
   header("location:login.php");
 }
 include('config.php');
$vendor=$_SESSION['username'];
$servicename=$_POST['servicename'];
$category=$_POST['category'];
$company=$_POST['company'];
$price=$_POST['price'];
$sql='INSERT INTO services (name, category, company, price,vendor) VALUES ("'.$servicename.'", "'.$category.'", "'.$company.'", "'.$price.'","'.$vendor.'")';
$result=mysqli_query($conn,$sql);
header("location:Vendor-Services.php");
?>
