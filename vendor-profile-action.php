<?php
session_start();
include('includes/config.php');

if(isset($_POST['update']))
{
    $id=$_SESSION['id'];
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $bussinessemail=$_POST['bussinessemail'];
    $companyname=$_POST['companyname'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];


    $query = "UPDATE users SET fullname='$fullname',username='$username',bussinessemail='$bussinessemail', companyname='$companyname',address='$address',phoneno='$phoneno' where id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: Vendor-Profile.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: Vendor-Profile.php");
    }
}

if ($_POST['Cancel'] == "cancel")
{
    header("Location: Vendor-Profile.php");
}

?>
