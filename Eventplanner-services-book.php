


<!DOCTYPE html>

<?php

session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Book Service</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme9">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
       <?php
include('config.php');
$id=$_GET['id'];
$query="SELECT * FROM services where id=$id";
$result=mysqli_query($conn,$query);
?>
		  <div class="card-title text-uppercase text-center py-3">Book Service</div>
      <?php
while($rows=mysqli_fetch_assoc($result))
{
?>
		    <form action="Eventplanner-services-action.php" method="POST" >
        <div class="form-group">
			  <label for="exampleInputname" class="label">ID</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="id" name="id" class="form-control input-shadow" value="<?php echo $rows['id'];?>" readonly>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputname" class="label">Service Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="name" name="name" class="form-control input-shadow" value="<?php echo $rows['name'];?>" readonly>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputTimings" class="label">Category</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="category" name="category" class="form-control input-shadow" value="<?php echo $rows['category'];?>" readonly>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputTimings" class="label">Company Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="company" name="company" class="form-control input-shadow" value="<?php echo $rows['company'];?>" readonly>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputTimings" class="label">Vendor</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="vendor" name="vendor" class="form-control input-shadow" value="<?php echo $rows['vendor'];?>" readonly>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputTimings" class="label">Price</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="price" name="price" class="form-control input-shadow" value="<?php echo $rows['price'];}?>" readonly>
			   </div>
			  </div>
        <div class="form-group">
			  <label for="exampleInputTimings" class="label">Timings</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="timings" name="timings" class="form-control input-shadow" placeholder="Enter Timings" required="">
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputTimings" class="label">Date</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="date" name="date" class="form-control input-shadow" placeholder="Enter date" required="">
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputQuantity" class="label">Quantity</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="quantity" name="quantity" class="form-control input-shadow" placeholder="Enter quantity" required="">
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <!-- <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label> -->
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <!-- <a href="reset-password.php">Reset Password</a> -->
			 </div>
			</div>
			
       <input type="submit" name="submit" value="Finish Booking" class="btn btn-light btn-block" >


			 
			 
			 </form>
		   </div>
		  </div>
		  <!-- <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Do not have an account? <a href="signup.php"> Sign Up here</a></p>
		  </div>
	     </div> -->
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  





  
</body>
</html>

