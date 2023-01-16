<?php
 include('config.php');


$id=$_GET['id'];


$sql='DELETE FROM events_booked WHERE id="'.$id.'" ';
$result=mysqli_query($conn,$sql);
header("location:EventPlanner-events.php");



?>