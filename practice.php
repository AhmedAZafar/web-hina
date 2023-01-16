<?php
session_start();

          include('config.php');
          $query="SELECT * FROM events WHERE eventplanner ='{$_SESSION['username']}'";
          $result=mysqli_query($conn,$query);
          while($rows=mysqli_fetch_assoc($result))
          {
          echo $rows['fullname'];}

?>

<!-- 
<form>
                    <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  name="fullname" class="form-control input-shadow" value="<?php 
				  include('config.php');
				  $query="SELECT * FROM events WHERE eventplanner ='{$_SESSION['username']}'";
				  $result=mysqli_query($conn,$query);
				  while($rows=mysqli_fetch_assoc($result))
				  {
				  echo $rows['fullname'];}?>">
				  <div class="form-control-position">
					  <i class="icon-pencil"></i>
				  </div>
			   </div>
			  </div>
        <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label">User Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="username" name="username" class="form-control input-shadow" placeholder="Enter Your userName" >
				   <span id="usernamee" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label"> Bussiness Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="be" name="bussinessemail" class="form-control input-shadow" placeholder="Enter Your Email ID" >
				   <span id="bussinessemaill" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="phoneno" name="phoneno" class="form-control input-shadow" placeholder="Enter Your phone number" >
				   <span id="phonenoo" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-phone"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label"> Company Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="companyname" name="companyname" class="form-control input-shadow" placeholder="Enter Your companyname" >
				   <span id="companynamee" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-globe"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label"> Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="address" name="address" class="form-control input-shadow" placeholder="Enter Your address" >
				   <span id="addresss" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class=" icon-home"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <label class="col-lg-3 col-form-label form-control-label">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="pass" name="password" class="form-control input-shadow" placeholder="Choose Password" >
				   <span id="passwordd" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			   <div class="form-group">
			  <label class="col-lg-3 col-form-label form-control-label"> Confirm Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="cp" name="confirmedpassword" class="form-control input-shadow" placeholder="Enter Your confirmed password">
				   <span id="confirmedpasswordd" class="text-warning font-weight-bold"> </span>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
        <input type="submit" name="submit" value="Signup" class="btn btn-light btn-block waves-effect waves-light">
			 
			
			
			 </form> -->