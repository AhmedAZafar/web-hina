<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Event planner-events-pics</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme9">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dream Events</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Event Planner Panel</li>
    <li>
        <a href="EventPlanner_Dashboard.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="EventPlanner_calender.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="EventPlanner_Profile.php">
          <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="EventPlanner-services.php">
          <i class="zmdi zmdi-8tracks"></i> <span>Services</span>
        </a>
      </li>

      <li>
        <a href="EventPlanner-Bookings.php">
          <i class="zmdi zmdi-book"></i> <span>Bookings</span>
        </a>
      </li>

      <li>
        <a href="EventPlanner-Staff.php">
          <i class="zmdi zmdi-male-female"></i> <span>Staff</span>
        </a>
      </li>

      <li>
        <a href="EventPlanner-customers.php">
          <i class="zmdi zmdi-accounts-alt"></i> <span>Clients</span>
        </a>
      </li>

      <li>
        <a href="EventPlanner-post.php">
          <i class="zmdi zmdi-brush"></i> <span>Post</span>
        </a>
      </li>
      
      <li>
        <a href="EventPlanner-events.php">
          <i class="zmdi zmdi-book-image"></i> <span>Events</span>
        </a>
      </li>
      <li>
        <a href="EventPlanner-reviews.php">
          <i class="zmdi zmdi-info"></i> <span>Reviews</span>
        </a>
      </li>
      <li>
        <a href="Attendance.php">
          <i class="zmdi zmdi-accounts-add"></i> <span>Attendance</span>
        </a>
      </li>




    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/profile.1.jpg" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Rabia Javed</h6>
            <p class="user-subtitle">Rabia@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
     <section class="gallery" id="gallery">

    <h1 class="heading">Event<span>Gallary</span></h1>

    <div class="box-container" style="display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:1.5rem;">

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-1.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

<div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-2.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-3.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-4.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-5.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-6.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-7.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-3.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-5.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-4.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>

        <div class="box" style=" position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;">
            <img src="assets/images/g-1.jpg" alt="" style=" height: 100%;
    width: 100%;
    object-fit: cover;">
            <h3 class="title" style=" position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;">photos and events</h3>
            <div class="icons" style=" position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;">
                <a href="#" class="fas fa-heart" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-share" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
                <a href="#" class="fas fa-eye" style=" font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;"></a>
            </div>
        </div>
        
        </div>

    </div>


</section>


     
          </div>
        </div>
      
	  
	  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer" style="top: 450%; ">
      <div class="container">
        <div class="text-center">
          Copyright © 2022 Dream Events, Pakistan
           <ul class="social-icons" style=" padding: 0;
    list-style: none;
    margin: 1em; ">
        <li><a href="https://www.instagram.com/de.dreamevents/"><i class="fa fa-instagram" ></i></a></li>
        <li><a href="https://mobile.twitter.com/DreamEvents657"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/dreamevents84/"><i class="fa fa-facebook"></i></a></li>
    </ul>
        </div>

      </div>
    </footer>
	<!--End footer-->
	
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
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>



<style >
  .gallery .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:1.5rem;
}

.gallery .box-container .box{
    position: relative;
    border:1rem solid #333;
    border-radius: .5rem;
    height: 25rem;
    cursor: pointer;
    overflow: hidden;
}

.gallery .box-container .box img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.gallery .box-container .box:hover img{
    transform: scale(1.1);
    filter: grayscale();
}

.gallery .box-container .box .title{
    position: absolute;
    top:-10rem; left:0; right: 0;
    background:#333;
    color:#fff;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 2rem;
}

.gallery .box-container .box:hover .title{
    top:0;
}

.gallery .box-container .box .icons{
    position: absolute;
    bottom:-10rem; left:0; right: 0;
    background:#333;
    padding-top: 1rem;
    text-align: center;
}

.gallery .box-container .box:hover .icons{
    bottom: 0;
}

.gallery .box-container .box .icons a{
    font-size: 2rem;
    margin:.5rem 1rem;
    color:#fff;
}

.gallery .box-container .box .icons a:hover{
    color:var(--main-color);
}
.social-icons li{
  display: inline-block;
        margin: 0.15em;
        position: relative;
        font-size: 1.2em;
        color: rgba(255, 255, 255, 0.65);
}




</style>