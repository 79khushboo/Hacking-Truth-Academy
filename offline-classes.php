<?php


session_Start();





?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/offline-classes-style.css">

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
      <li class="nav-item ">
        <a class="nav-link" href="hackingtruth.php">Home </a>
      </li>
	  
      <li class="nav-item ">
        <a class="nav-link" href="footprinting-course.php">Courses</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="students.php">Students</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="offline-classes.php">Offline Classes<span class="sr-only">(current)</span></a>
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
  <h1 class="font-weight-bold">Connect With Offline Classes</h1>
    <p>OFFLINE-CLASSES</p>
	   <div class="header-buttons">
	      <a href="#">About</a>
	      <a href="#">Walk with us</a>
	        
	   </div>
</div>


</section>

</div>

<!--------------------------------------------- HEADER PARTS END ------------------------------------------------>


<!--------------------------------------------- OFFLINE CLASSES START ------------------------------------------------>



<div class="container">  
		<div class="row my-5">
			<div class="col-lg-4">

				<div class="card">
					<div class="card-header">
						<h3>Offline Classes</h3>
					</div>

					<div class="card-body">
						<div class="card-title"><b>ADVANCED ETHICAL HACKING AND PENETRATION TESTING</b></div>
						<ul>
							<li>1 Month / 3 Month Program</li>
							<li>100% practical lab based classes</li>
							<li>Take away Certificate of Completion</li>
							<li>Providing you knowledge to kickstart your career in CyberSecurity</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="d-lg-none">
				<div class="col-4">
					<br>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<form action="" method="POST" onsubmit="return val">
							<div class="form-group">
								<label for="userName">Name</label>
								<input type="text" class="form-control" id="userNameInput" aria-describedby="userNameInput" placeholder="Enter your Name">
							</div>
							<div class="form-group">
								<label for="emailId">Email</label>
								<input type="email" class="form-control" id="emailIdInput" aria-describedby="emailIdInput" placeholder="Enter your Email">
							</div>
							<div class="form-group">
								<label for="phoneNumber">Phone Number</label>
								<input type="number" class="form-control" id="phoneNumberInput" aria-describedby="phoneNumberInput" placeholder="Enter your Phone Number">
							</div>
							<div class="form-group">
								<label for="address">Address</label>
								<input type="text" class="form-control" id="addressInput" aria-describedby="addressInput" placeholder="Enter your address">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="interestedCheckbox" aria-describedby="yes i am interested checkbox">
								<label class="form-check-label" for="interested"><b>Yes</b> I am interested </label>
							</div>
							<input type="button" class="btn btn-primary p-1" id="brochureDownload" value="Download Brochure" disabled="">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<style>
	i.fa {
		display: inline-block;
		border-radius: 60px;
		box-shadow: 0px 0px 2px #888;
		padding: 0.5em 0.6em;
	}
</style>













<!--------------------------------------------- OFFLINE-CLASSES END ------------------------------------------------>


<!--------------------------------------------- FOOTER START ------------------------------------------------>

<footer class="footer bg-dark text-light">
<div class="container-fluid footer" >
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
<h4 class="text-center text-md-left" style=" color:#fff">Main Menu</h4>
<div class="row ">
					<div class="col-12 my-1" >
						<a class="text-white-50" href="#">Courses</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Students</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Offline Classes</a>
					</div>
					<div class="col-12 my-1">
						<a class="text-white-50" href="#">Contact</a>
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












