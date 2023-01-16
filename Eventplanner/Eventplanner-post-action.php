<?php
 include('config.php');


$caption=$_POST['caption'];
$availability=$_POST['availability'];
$discount=$_POST['discount'];




$sql='INSERT INTO post (caption, availability, discount) VALUES ("'.$caption.'","'.$availability.'","'.$discount.'")';
$result=mysqli_query($conn,$sql);
header("location:EventPlanner-post.php");



?>