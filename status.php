<?php
 include('config.php');

$id=$_GET['id'];
$status=$_GET['status'];
$q="UPDATE users SET status=$status where id=$id";
mysqli_query($conn,$q);
header('location:Admin-Customers.php');

?>
