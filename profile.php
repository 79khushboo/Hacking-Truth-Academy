<?php

require_once('controller/connectionstring.php');
 
session_start();
   
//echo $_SESSION['email'];
  

?>
 

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/profile-style.css">

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
	  
      <li class="nav-item">
        <a class="nav-link" href="footprinting-course.php">Courses</a>
      </li>
      
      <li class="nav-item ">
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
		   
	  <li class="nav-item active">
	    <a class="nav-link" href="/online course/profile.php">Profile<span class="sr-only">(current)</span></a>
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




<section class="header-section ">
<div class="center-div">
  <h1 class="font-weight-bold text-uppercase p-2">YOUR PROFILE</h1>
    <p>YOUR PROFILE IS YOUR IDENTITY</p>
	   <div class="header-buttons">
	      <a href="#">About</a>
	      <a href="#">Walk with us</a>
	        
	   </div>
</div>

</section>

</div>


<!--------------------------------------------- HEADER PARTS END -------------------------------------------->


<!-------------------------------------Search for students using htid Start---------------------------------->


<div class="container my-5 px-0 px-md-3">
				<div class="col-12 offset-md-3 col-md-6">
											<div class="card">
				<i class="far mx-auto fa fa-user fa-8x mt-3"></i>
				<div class="card-body">
					<div class="row">
						<h4 class="mx-auto" id="nameHeading">kumar Atul jaiswal</h4>
					</div>
					<div class="row">
						<h5 class="mx-auto">Challenge Points: <span class="text-success">0</span></h5>
					</div>
					<div class="row">
						<h7 class="text-muted mx-auto">HTID: HT_y9096pp5wo</h7>
					</div>

					<ul class="nav nav-tabs nav-fill mt-3 flex-column flex-sm-row" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="flex-sm-fill text-sm-center nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
						</li>
						<li class="nav-item">
							<a class="flex-sm-fill text-sm-center nav-link" id="changepass-tab" data-toggle="tab" href="#changePass" role="tab" aria-controls="changePass" aria-selected="false">Password</a>
						</li>
					</ul>

					<div class="tab-content mt-3 text-left" id="myTabContent">
						<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<form id="profileForm" action="" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="name">First Name:</label>
											<input type="text" value="kumar Atul" id="name" name="firstname" class="form-control" placeholder="Name" oninput="UpdateName(event)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="name">Last Name:</label>
											<input type="text" value="jaiswal" id="name" name="lastname" class="form-control" placeholder="Name" oninput="UpdateName(event)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="email">E-Mail:</label>
											<input type="text" value="<?php $msg_name = $_SESSION['email']; echo $msg_name; ?>" id="email" class="form-control-plaintext" disabled="">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="hidden" name="action" value="updateProfile">
									<button id="submitBtn" type="submit" class="btn mx-auto btn-secondary disabled" disabled="">Save Changes</button>
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="changePass" role="tabpanel" aria-labelledby="changepass-tab">
							<h4 class="text-center mb-3">Change Your Password</h4>
							<form method="POST" action="">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<input type="password" name="oldpassword" class="form-control" placeholder="Old Password" required="">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="password" name="newpassword" class="form-control" placeholder="New Password" required="">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="">
										</div>
									</div>
								</div>
								<div class="row">
									<input type="hidden" name="action" value="changePassword">
									<button type="submit" class="btn mx-auto btn-success">Change Password</button>
								</div>
							</form>
						</div>
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





















<!-------------------------------------Search for students using htid End---------------------------------->


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












