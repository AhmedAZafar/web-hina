<?php
 include('config.php');

$id=$_GET['id'];
$statu=$_GET['statu'];
$q="UPDATE events SET statu=$statu where id=$id";
mysqli_query($conn,$q);
header('location:EventPlanner-Bookings.php');

?>
