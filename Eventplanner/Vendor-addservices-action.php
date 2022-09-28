




<?php
include("includes/config.php");

if(isset($_POST['submit']))
{	
	$n=$_POST['name'];
	$com=$_POST['company'];
	$cos=$_POST['cost'];
	$av=$_POST['availability'];
    $ct=$_POST['category'];

if(isset($_FILES['image']['name']))
                {
                    $im = $_FILES['image']['name'];
                    if($im != "")
                    {

                        $ext0 = explode('.', $im);
                        $ext = end($ext0);
                        $im = "Service_Product_".rand(000, 999).'.'.$ext; 
                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "graphicss/".$im;
                        $upload = move_uploaded_file($source_path, $destination_path);

                        if($upload==false)
                        {
                            header('location: Vendor-Services.php?status=IFU');
                            die();
                        }

                    }
                }
                else
                {
                    $im="";
                }

	
               

$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
    if ($conn->connect_error) {
    trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
}
$sql="INSERT INTO  services SET image= '$im', name = '$n' , company = '$com' , cost = '$cos' , availability = '$av',  category = '$ct' ";
$stmt= mysqli_query($conn, $sql);
if($stmt == true)
{
header('location:Vendor-Services.php?status=AS');
	
}
else{
 header('location:Vendor-addservices.php?status=FA');   
}
$conn->close();
}





?>

