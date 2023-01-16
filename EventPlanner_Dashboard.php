<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Event Planner Dashboard</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
          <!-- <small class="badge float-right badge-light">New</small> -->
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
        <!-- <a href="EventPlanner-Staff.php"> -->
          <!-- <i class="zmdi zmdi-male-female"></i> <span>Staff</span> -->
        </a>
      </li>

      <li>
        <!-- <a href="EventPlanner-customers.php"> -->
          <!-- <i class="zmdi zmdi-accounts-alt"></i> <span>Clients</span> -->
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
        <!-- <a href="Attendance.php"> -->
          <!-- <i class="zmdi zmdi-accounts-add"></i> <span>Attendance</span> -->
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
        <!-- <input type="text" class="form-control" placeholder="Enter keywords"> -->
         <!-- <a href="javascript:void();"><i class="icon-magnifier"></i></a> -->
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <!-- <i class="fa fa-envelope-open-o"></i></a> -->
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <!-- <i class="fa fa-bell-o"></i></a> -->
    </li>
    
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <!-- <span class="user-profile"><img src="assets/images/profile.1.jpg" class="img-circle" alt="user avatar"></span> -->
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <!-- <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div> -->
            <div class="media-body">
            <!-- <h6 class="mt-2 user-title">Rabia Javed</h6> -->
            <!-- <p class="user-subtitle">Rabia@gmail.com</p> -->
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <!-- <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li> -->
        <li class="dropdown-divider"></li>
        <!-- <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li> -->
        <li class="dropdown-divider"></li>
        <!-- <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li> -->
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

  <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">
                     <?php
                  include('config.php');
                  $query="SELECT * FROM users WHERE type='Customer'";
                  $query_run=mysqli_query($conn,$query);
                  $row=mysqli_num_rows($query_run);
                  echo'<h7>'.$row.'</h7>';

                    ?>
                    <span class="float-right"><i class="fa fa-user"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Customers <span class="float-right"></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">
                  <?php
                  include('config.php');
                  $query="SELECT * FROM users WHERE type='Event Planner'";
                  $query_run=mysqli_query($conn,$query);
                  $row=mysqli_num_rows($query_run);
                  echo'<h7>'.$row.'</h7>';

                    ?>
                  
                  <span class="float-right"><i class="fa fa-user"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Event Planners <span class="float-right"></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">
                  <?php
                  include('config.php');
                  $query="SELECT * FROM users WHERE type='Vendor'";
                  $query_run=mysqli_query($conn,$query);
                  $row=mysqli_num_rows($query_run);
                  echo'<h7>'.$row.'</h7>';
                    ?>
                  <span class="float-right"><i class="fa fa-user"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Vendors<span class="float-right"></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">
                    <?php
                  include('config.php');
                  $query="SELECT * FROM users";
                  $query_run=mysqli_query($conn,$query);
                  $row=mysqli_num_rows($query_run);
                  echo'<h7>'.$row.'</h7>';

                    ?>
                  <span class="float-right"><i class="fa fa-user"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total Users<span class="float-right"> </span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
    
  <div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
      <div class="card">
     <div class="card-header">Types of Website Users
       <div class="card-action">
       
       </div>
     </div>
     <div class="card-body">
        <!-- <ul class="list-inline">
        <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New Customers</li>
        <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old Customers</li>
      </ul> -->
      <div class="chart-container-1">
        <!-- <canvas id="chart1"></canvas> -->

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['gender', 'Male'],
          <?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dream_events";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$query="SELECT gender,count('Male') as Male FROM gender GROUP BY gender";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
  echo "['".$row["gender"]."',".$row["Male"]."],";
}
?>        
      
        ]);

        var options = {
          curveType: 'function',
          chartArea: {left:50,top:15,width:'80%',height:'80%'}, 
          backgroundColor: 'transparent',
          colors: ["#FFFFFF"],
          hAxis:{
          title: "Gender",
          titleTextStyle: {
          fontName: 'Times-Roman',
          fontSize: 16,
          bold: true,
          color: "#FFFFFF"
         },
         textStyle: {
         fontName: 'Times-Roman',
         fontSize: 16,
         bold: true,
         color: "#FFFFFF"
    },
  },
  vAxis:{
          title: "Numbers",
          titleTextStyle: {
          fontName: 'Times-Roman',
          fontSize: 16,
          bold: true,
          color: "#FFFFFF"
         },
         textStyle: {
         fontName: 'Times-Roman',
         fontSize: 16,
         bold: true,
         color: "#FFFFFF"
    },
  },
          legend: { position: 'none' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
     <div id="curve_chart" style="width: 750px; height: 270px"></div>
      </div>
     </div>
     
     <!-- <div class="row m-0 row-group text-center border-top border-light-3">
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <h5 class="mb-0">45.87M</h5>
         <small class="mb-0">Overall Customers <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
         </div>
       </div>
       <div class="col-12 col-lg-4">
         <div class="p-3">
           <h5 class="mb-0">15:48</h5>
         <small class="mb-0">Customers Duration <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
         </div>
       </div>
       
     </div> -->
     
    </div>
   </div>

   <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Events In Trend
             <div class="card-action">
             
             </div>
           </div>
           <div class="card-body">
		     <div class="chart-container-2">
            <!-- <canvas id="chart2"></canvas> -->
            <?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dream_events";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName  );
$query="SELECT category,count(*) as number FROM events GROUP BY category";
$result=mysqli_query($conn,$query);
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Event', 'Number'],
          <?php
          while($row=mysqli_fetch_array($result))
          {
            echo "['".$row["category"]."',".$row["number"]."],";
          }
        ?>
        ]);
        var options = {
          pieHole: 0.4,
          chartArea: {left:2,top:2,width:'90%',height:'85%'}, 
          backgroundColor: 'transparent',
          colors: ["#000000","#505050","#696969","#808080",	"#A9A9A9"],
          pieSliceBorderColor:'transparent',
          legend : {
             position : 'right',
             textStyle: { color: "#FFFFFF",
              fontName: 'Times-Roman',
              fontSize: 14
                        }
                     
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  
    <div id="donutchart" style="width: 380px; height: 200px;"></div>
 

			  </div>
           </div>
           <div class="table-responsive">
             <!-- <table class="table align-items-center">
               <tbody>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> Active Users</td>
                   <td>74398</td>
                   
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-1 mr-2"></i>Inactive Users</td>
                   <td>82602</td>
                   
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-2 mr-2"></i>All Users</td>
                   <td>9988990</td>
                   
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                   <td>105</td>
                   
                 </tr>
               </tbody>
             </table> -->
           
         </div>
     </div>
  </div><!--End Row-->
  
  <div class="row">
   <div class="col-12 col-lg-12">
     <div class="card">
      
       

                  
               </div>
     </div>
   </div>
  </div><!--End Row-->

      <!--End Dashboard Content-->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/639325e3daff0e1306dbbe91/1gjrddeo4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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
  
<footer class="footer" style="top: 150%; ">
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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>

<style>

 .social-icons li{
  display: inline-block;
        margin: 0.15em;
        position: relative;
        font-size: 1.2em;
        color: rgba(255, 255, 255, 0.65);
}
</style>