<?php
 include('config.php');


$id=$_GET['id'];


$sql='DELETE FROM services WHERE id="'.$id.'" ';
$result=mysqli_query($conn,$sql);
header("location:Vendor-Services.php");



?>