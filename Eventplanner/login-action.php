<?php 

include('includes/config.php');
$username = $_POST['username'];
$pass = $_POST['password'];





if (isset($_POST['username']) && isset($_POST['password']))
{

	$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
	if ($conn->connect_error) 
	{
	trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
	}  
$sql='SELECT * FROM users WHERE username = ?';
$stmt=$conn->prepare($sql);
if($stmt == false)
{
	trigger_error('wrong sql in Insertion'. $conn->error);
}

$stmt->bind_param('s',$username);
$stmt->execute();

$stmt->store_result();
if($stmt->num_rows>0)
{
	$stmt->bind_result($id, $fullname, $username, $bussinessemail, $phoneno, $companyname, $address, $password, $confirmedpassword, $type);
	while($stmt->fetch())
	{
		//$matched = password_verify($password, $password);
		if($pass==$password)
		{
			$_SESSION["loggedin"]=true;
			$_SESSION["id"]=$id;
			$_SESSION["fullname"]=$fullname;
			$_SESSION["username"]=$username;
			$_SESSION["bussinessemail"]=$bussinessemail;
			$_SESSION["phoneno"]=$phoneno;
			$_SESSION["companyname"]=$companyname;
			$_SESSION["address"]=$address;
			$_SESSION["password"]=$password;
			$_SESSION["confirmedpassword"]=$confirmedpassword;
			$_SESSION["type"]=$type;

			setcookie("username",$username,time()+60*60*24*30);
		}
	}





	
if($pass==$password)
{
	
	
	if($type=='Vendor' ){
	header("location:Vendor-Profile.php");}
	if($type=='Event Planner'){
	header("location:EventPlanner_Dashboard.php");}
	
}
else

	header("location:login.php?status=PF");
}


if($username=='admin' && $pass=='admin1' ){
	header("location:Admin-dashboard.php");}

	
else
	{
		echo "incorrect login";
	}



}


?>