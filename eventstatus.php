<?php
 include('config.php');

$id=$_GET['id'];
$status=$_GET['status'];
$q="UPDATE events_booked SET status=$status where id=$id";
mysqli_query($conn,$q);
header('location:EventPlanner-events.php');

?>
