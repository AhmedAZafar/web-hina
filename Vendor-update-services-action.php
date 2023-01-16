
<?php
include("includes/config.php");
if(isset($_POST['submit']))
    {
  $id = $_POST['id'];
  $n=$_POST['name'];
  $com=$_POST['company'];
  $cos=$_POST['cost'];
  $av=$_POST['availability'];
  $ct=$_POST['category'];
  





    $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
    if ($conn->connect_error) {
    trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
    }
        $sql="UPDATE services SET name='$n',company='$com',cost='$cos' , availability='$av', category='$ct' 
        WHERE id='$id'";
    if ($conn->query($sql)==false) 
  {
    header("location:Vendor-Services.php?status=FU");
  }
  else
  {
    header("location:Vendor-Services.php?status=US"); 
  }}
?>







