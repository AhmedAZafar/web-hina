<?php
 include('config.php');

$id=$_GET['id'];
$q="SELECT * FROM services where id=$id";
$result=mysqli_query($conn,$q);
while($row=mysqli_fetch_assoc($result))
{
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
}

?>
