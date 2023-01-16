<?php
 include('config.php');

$id=$_POST['id'];
$name=$_POST['name'];
$category=$_POST['category'];
$company=$_POST['company'];
$vendor=$_POST['vendor'];
$price=$_POST['price'];
$timing=$_POST['timings'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];


$sql='INSERT INTO services_booking (name, category, company, vendor, price, timing, quantity, date) VALUES ("'.$name.'","'.$category.'","'.$company.'","'.$vendor.'","'.$price.'","'.$timing.'","'.$quantity.'","'.$date.'")';
$result=mysqli_query($conn,$sql);
header("location:EventPlanner-services.php");



?>


