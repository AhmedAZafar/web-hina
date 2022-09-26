





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Signup</title>
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

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up </div>
		    <form action="signup-action.php" method="POST" onsubmit="return validation()">
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Full Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="fullname" name="fullname" class="form-control input-shadow" placeholder="Enter Your Name" >
				  <span id="fullnamee" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-pencil"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">User Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="username" name="username" class="form-control input-shadow" placeholder="Enter Your userName" >
				   <span id="usernamee" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only"> Bussiness Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="be" name="bussinessemail" class="form-control input-shadow" placeholder="Enter Your Email ID" >
				   <span id="bussinessemaill" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Phone Number</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="phoneno" name="phoneno" class="form-control input-shadow" placeholder="Enter Your phone number" >
				   <span id="phonenoo" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-phone"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only"> Company Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="companyname" name="companyname" class="form-control input-shadow" placeholder="Enter Your companyname" >
				   <span id="companynamee" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-globe"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only"> Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="address" name="address" class="form-control input-shadow" placeholder="Enter Your address" >
				   <span id="addresss" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class=" icon-home"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="pass" name="password" class="form-control input-shadow" placeholder="Choose Password" >
				   <span id="passwordd" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only"> Confirmed Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="cp" name="confirmedpassword" class="form-control input-shadow" placeholder="Enter Your confirmed password">
				   <span id="confirmedpasswordd" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  
     <div class="form-group">
                  <label for="birthday">Birthday:</label>
                  
                  <input type="date"  id="birthday" name="birthday" class="form-control input-shadow" required="" >

                 </div>




			  <div class="form-group" >
        <label for="City" >City:</label>
       
        
               <select id="City" name="City" class="form-control input-shadow" required="">
                 <option disabled selected value></option>
               <option value="Islamabad">Islamabad</option>
                 <option value="Lahore">Lahore</option>
               <option value="Karachi">Karachi</option>
               <option value="Peshawar">Peshawar</option>
               <option value="Quetta"> Quetta</option>
               <option value="Rawalpindi">Rawalpindi</option>
               <option value="Faisalabad">Faisalabad</option>
               <option value="Gujranwala">Gujranwala</option>
               <option value="Sargodha">Sargodha</option>
               <option value="Sialkot">Sialkot</option>
               <option value="Hyderabad">Hyderabad</option>
               <option value="Bahawalpur">Bahawalpur</option>
               <option value="Abbotabad">Abbotabad</option>
               <option value="Sawat">Sawat</option>

                 </select>
             </div>


			  <div class="form-group" >
        <label for="type" >Select Type:</label>
             <select id="type" name="type" class="form-control input-shadow" required="">
 <option disabled selected value></option>
  <option value="Vendor">Vendor</option>
    <option value="Event Planner">EventPlanner</option>
</select>
</div>

<div class="form-group"  >
        <label for="vendortype" >Select Vendor Type:</label>
        <select name="vendortype" id="vendortype" class="form-control input-shadow" required="">
	<option disabled selected value></option>
  <option value="cd">Cakes and Desserts</option>
  <option value="saab">Caterers: Full Service & Wedding</option>
  <option value="mercedes">Caterers: Casual & Sandwich</option>
  <option value="audi">Caterers: Party Drinks</option>
  <option value="cd">Flowers</option>
  <option value="saab">Limos & Transportation</option>
  <option value="mercedes">Music</option>
   <option value="audi">Gifts</option>
  <option value="audi">Photography</option>
  <option value="cd">Entertainment: Kids</option>
  <option value="saab">Entermainment: Adults</option>
  <option value="mercedes">Home Beautification</option>
  <option value="audi">Decorations & Lighting</option>
  <option value="cd">Party and Wedding favors</option>
  <option value="saab">Rental & Party Supplies</option>
  <option value="mercedes">Videography</option>
 
</select>



    </div>



             <br>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
			     </div>
			    </div>
			  <input type="submit" name="submit" value="Signup" class="btn btn-light btn-block waves-effect waves-light">
			 
			
			
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Already have an account? <a href="login.php"> Sign In here</a></p>
		  </div>
	     </div>
    
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
  <script>
    $('select[name="type"]').on('change',function()
    {
        $('select[name="vendortype"]').attr('disabled',this.value!="Vendor")
       });

</script>


<script type="text/javascript">
		

		function validation(){

			var fullname = document.getElementById('fullname').value;
			var username = document.getElementById('username').value;
			var bussinessemail = document.getElementById('be').value;
			var phoneno = document.getElementById('phoneno').value;
			var companyname = document.getElementById('companyname').value;
			var address = document.getElementById('address').value;
			var password = document.getElementById('pass').value;
			var confirmedpassword = document.getElementById('cp').value;

			

                 if(fullname == ""){
				document.getElementById('fullnamee').innerHTML ="  Please fill the Full Name field";
				return false;
			}


			if(username == ""){
				document.getElementById('usernamee').innerHTML ="  Please fill the username field";
				return false;
			}
			
		if((username.length <= 2) || (username.length > 20)) {
				document.getElementById('usernamee').innerHTML ="  Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(username)){
				document.getElementById('usernamee').innerHTML ="  only characters are allowed";
				return false;
			}
			



			if(bussinessemail == ""){
				document.getElementById('bussinessemaill').innerHTML ="  Please fill the email id field";
				return false;
			}
			if(bussinessemail.indexOf('@') <= 0 ){
				document.getElementById('bussinessemaill').innerHTML ="  @ Invalid Position";
				return false;
			}

			if((bussinessemail.charAt(bussinessemail.length-4)!='.') && (bussinessemail.charAt(bussinessemail.length-3)!='.')){
				document.getElementById('bussinessemaill').innerHTML ="  . Invalid Position";
				return false;
			}






			if(phoneno == ""){
				document.getElementById('phonenoo').innerHTML ="  Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(phoneno)){
				document.getElementById('phonenoo').innerHTML ="  user must write digits only not characters";
				return false;
			}
			if(phoneno.length!=10){
				document.getElementById('phonenoo').innerHTML ="  Mobile Number must be 10 digits only";
				return false;
			}


             if(companyname == ""){
				document.getElementById('companynamee').innerHTML ="  Please fill the company name field";
				return false;
			}


            if(address == ""){
				document.getElementById('addresss').innerHTML ="  Please fill the address field";
				return false;
			}
			
		if((address.length <= 20) || (address.length > 100)) {
				document.getElementById('addresss').innerHTML ="  address lenght must be between 20 and 100 characters";
				return false;	
			}


			if(password == ""){
				document.getElementById('passwordd').innerHTML ="  Please fill the password field";
				return false;
			}
			if((password.length <= 5) || (password.length > 20)) {
				document.getElementById('passwordd').innerHTML ="  Password lenght must be between  5 and 20";
				return false;	
			}


			if(password!=confirmedpassword){
				document.getElementById('confirmedpasswordd').innerHTML ="  Password does not match the confirm password";
				return false;
			}



			if(confirmedpassword == ""){
				document.getElementById('confirmedpasswordd').innerHTML ="  Please fill the confirmpassword field";
				return false;
			}






			
		}

	</script>


  


</body>
</html>

