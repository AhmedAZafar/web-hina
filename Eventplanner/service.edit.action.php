<?php
 include('config.php');

$id=$_POST['id'];
$servicename=$_POST['servicename'];
$category=$_POST['category'];
$company=$_POST['company'];
$price=$_POST['price'];
$sql="UPDATE services SET name='$servicename', category='$category', company='$company', price='$price' WHERE id=$id";
$result=mysqli_query($conn,$sql);
header("location:Vendor-Services.php");
?>
