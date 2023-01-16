<?php
 include('config.php');


$eventname=$_POST['eventname'];
$customer=$_POST['customer'];
$date=$_POST['date'];
$time=$_POST['time'];
$venue=$_POST['venue'];

$sql='INSERT INTO events_booked (eventname, customer, date, time, venue) VALUES ("'.$eventname.'","'.$customer.'","'.$date.'","'.$time.'","'.$venue.'")';
$result=mysqli_query($conn,$sql);
header("location:EventPlanner-events.php");



?>