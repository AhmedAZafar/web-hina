<?php
 include('config.php');

$id=$_POST['id'];
$eventname=$_POST['eventname'];
$customer=$_POST['customer'];
$date=$_POST['date'];
$time=$_POST['time'];
$venue=$_POST['venue'];
$sql="UPDATE events_booked SET eventname='$eventname', customer='$customer', date='$date', time='$time', venue='$venue' WHERE id=$id";
$result=mysqli_query($conn,$sql);
header("location:EventPlanner-events.php");
?>










