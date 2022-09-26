<?php
session_start();
include('includes/config.php');

if(isset($_POST['edit']))
{
    $id=$_SESSION['id'];
    $bio=$_POST['bio'];
   


    $query = "UPDATE users SET bio='$bio'   where id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "bio Updated Successfully";
        header("Location: Vendor-Profile.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: Vendor-Profile.php");
    }
}



?>