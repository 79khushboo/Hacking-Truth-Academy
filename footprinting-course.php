<?php

session_start();



?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/footprinting-course-style.css">

<!-- Poppins Font-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<!-- Poppins Font-->

<!-- Font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font awesome icons -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


</head>
<body>


<!--------------------------------------------- HEADER PARTS START ------------------------------------------------>

<div class="header" id="top-header">
<nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top">
<div class="container text-uppercase p-2">
 

  <a class="navbar-brand" href="#">Hacking Truth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item">
        <a class="nav-link" href="hackingtruth.php">Home</a>
      </li>
	  
      <li class="nav-item active">
        <a class="nav-link" href="#">Courses <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="students.php">Students</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="offline-classes.php">Offline Classes</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
	   <?php
	  
	  if(isset($_SESSION['email']) && !empty($_SESSION['email']) )
	  {
		  
		  ?>
		   
	  <li class="nav-item">
	    <a class="nav-link" href="/online course/profile.php">Profile</a>
      </li>
	  
	  
	  
	 <?php  } else { ?>
	  
	  <!--
	  <li class="nav-item">
	    <a class="nav-link" href="login.php">Login</a>
      </li>
	  
-->	  
	  
	  <?php }   ?>
	  
	  
	<!--  <li class="nav-item">
	    <a class="nav-link" href="login.php">Login</a>
      </li>
	  
	  -->
	  
	  <?php
	  
	  if(isset($_SESSION['email']) && !empty($_SESSION['email']) )
	  {
		  
		  ?>
		   
	  <li class="nav-item">
	    <a class="nav-link" href="/online course/controller/logout.php">Logout</a>
      </li>
	  
	  
	  
	 <?php  } else { ?>
	  
	  
	  <li class="nav-item">
	    <a class="nav-link" href="login.php">Login</a>
      </li>
	  
	  
	  
	  
	  <?php }   ?>
	  
	  
	  
	 
	 <!--
	  <li class="nav-item">
	   
	   $msg_name = $_SESSION['email'];
	   
	  echo "<a class='nav-link' >$msg_name </a>"; 
	  
	  

</li>
         
	--> 
    </ul>
    </div>
  </div>
</nav>




<section class="header-section">
<div class="center-div">
  <h1 class="font-weight-bold text-uppercase p-2">Footprinting Course</h1>
    <p>WHEN YOU THINK About H4CKING DEFINATELY H4CKERS WILL THINK ABOUT YOU</p>
	   <div class="header-buttons">
	      <a href="#">About</a>
	      <a href="#">Walk with us</a>
	        
	   </div>
</div>

</section>

</div>


<!--------------------------------------------- HEADER PARTS END ------------------------------------------------>


<!--------------------------------------------- Course Footprinting Buy Start ------------------------------------------------>


<div class="container mt-3">
		<h2>Available Courses</h2>

					<div class="card my-3">
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-md-9">
							<h5 class="text-center text-md-left">Footprinting & Reconnaissance Course</h5>
							<p class="d-md-inline">In the Footprinting in Ethical Hacking training course, students will learn the basics of footprinting and reconnaissance, the first step in the ethical hacking methodology, and the tools that are commonly used in this information gathering task.</p>
						</div>
						<div class="col-12 col-md-3">
							<div class="text-center">
								<i class="fa fa-inr">&nbsp;<font style="font-weight: 100">399</font></i>
							</div>
							<div class="mt-2">
							
							
<?php
	  
	  if(isset($_SESSION['email']) && !empty($_SESSION['email']) )
	  {
		  
		  ?>
		   
							
							
				 <a href="footprinting-course-modules.php" class="btn btn-primary btn-block">Watch Course</a>
															
<?php  } else { ?>

 <a href="/online course/login.php" class="btn btn-primary btn-block">Login</a>
  <?php }   ?>
															</div>
						</div>
					</div>
				</div>
			</div>
				</div>
 
	  
<!--------------------------------------------- Course Footprinting Buy END ------------------------------------------------>


<!--------------------------------------------- FOOTER START ------------------------------------------------>

<footer class="footer bg-dark mt-5 text-light">
<div class=" container-fluidfooter" >
<div class="container p-4">
<div class="row">

<div class="col-sm-3 col-md-3">
<h4 class="text-center text-md-left" style=" color:#fff">Quick Links</h4>
<div class="row ">
					<div class="col-12 my-1" >
						<a class="text-white-50" href="#">Contact</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Legal</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Disclaimer</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Privacy Policy</a>
					</div>
				</div>

 
</div>



<div class="col-sm-3 col-md-3">
<h4 class="text-center text-md-left" style=" color:#fff">Stay Connect</h4>
<div class="row ">
					<div class="col-12 my-1" >
						<a class="text-white-50"  href="#">Facebook</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Instagram</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Twitter</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Linkedln</a>
					</div>
				</div>

 
</div>

<div class="col-sm-3 col-md-3">
<h4 class="text-center text-md-left" style=" color:#fff">Quick Links</h4>
<div class="row ">
					<div class="col-12 my-1" >
						<a class="text-white-50" href="#">Contact</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Legal</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Disclaimer</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Privacy Policy</a>
					</div>
				</div>

 
</div>

<div class="col-sm-3 col-md-3">
<h4 class="text-center text-md-left" style=" color:#fff">Quick Links</h4>
<div class="row ">
					<div class="col-12 my-1" >
						<a class="text-white-50" href="#">Contact</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Legal</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Disclaimer</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Privacy Policy</a>
					</div>
				</div>

 
</div>

</div>
</div>
</div>


<!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">HackingTruth.in</a>
  </div>
  <!-- Copyright -->
</footer>
 
<!--------------------------------------------- FOOTER END ------------------------------------------------>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

</body>
</html>












