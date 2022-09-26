<?php
include("includes/config.php");

if(isset($_POST['submit']))
{
	$be=$_POST['bussinessemail'];
	$pass=$_POST['password'];
	$npwd=$_POST['npaswd'];
	$cp=$_POST['confirmedpassword'];
    

	$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
	if ($conn->connect_error) 
	{
	trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
	}  
    $sql = "SELECT * FROM users WHERE bussinessemail='$be' AND password='$pass'";
    $stmt=mysqli_query($conn, $sql);
    if($stmt == true)
    {
	 $count=mysqli_num_rows($stmt);

                    if($count==1)
                    {
                        if($npwd==$cp)
                        {
             $sql2 = "UPDATE users SET password ='$npwd' WHERE bussinessemail='$be' ";
          


                            $stmt2 = mysqli_query($conn, $sql2);

                            if($stmt2==true)
                            {
                               header('location:login.php?status=PS');
                            }
                            else
                            {
                                header('location:reset-password.php?status=FP');
                            }
                        }
                        else
                        {
                            header('location:reset-password.php?status=PF');

                        }
                    }
                    else
                    {
                        header('location:reset-password.php?status=UNF');
                    }
                }            
}

else
{
	trigger_error('wrong sql in Insertion'. $conn->error);
}

