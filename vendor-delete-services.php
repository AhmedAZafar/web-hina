<?php
include("includes/config.php");
 if(isset($_GET['id']) && isset($_GET['image']))
    {
        
        $id = $_GET['id'];
        $im = $_GET['image'];
        if($im != "")
        {
            $path = "graphicss/".$im;
            $remove = unlink($path);
            if($remove==false)
            {
                header('location:Vendor-Services.php?status=FRCI');
                die();
            }
        }
 $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
        if ($conn->connect_error) {
        trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
        }
 $sql="DELETE FROM services WHERE id='$id'";
    if ($conn->query($sql)==false) 
    {
        header("location:Vendor-Services.php?status=FD");
    }
    else
    {
        header("location:Vendor-Services.php?status=DS");  
    }}
?>