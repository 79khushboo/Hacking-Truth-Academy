
<?php



session_start();

 

?>







<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/signup-style.css">

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

<div class="header " id="top-header">
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
      
      <li class="nav-item">
        <a class="nav-link" href="students.php">Students</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="offline-classes.php">Offline Classes</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item ">
	    <a class="nav-link" href="login.php">Login</a>
      </li>		
	  

    </ul>
    </div>
  </div>
</nav>

<!--
<ul class="navbar-nav ml-auto">
						<li class="nav-item active m-auto">
				<a class="nav-link" href="login.php"><i class="fa fa-sign-in"  style="font-size:2rem;" title="Log In"></i>
					<div class="d-md-none">Log In</div><span class="sr-only">(current)</span></a>
			</li>
				</ul>
	  

-->


	   
</div>


<!--------------------------------------------- HEADER PARTS END -------------------------------------------->


<!------------------------------------------------SIGNUP START ------------------------------------------------->
 
 
 <?php
 
 
 if(!empty($msg))
 {
	 
	 
	 
	 echo '$msg';
 }
 
 
 ?>
 
<div class="container my-5">
		<div class="col-sm-10 col-md-7 col-lg-7 p-0 mx-auto">
			<div class="border p-3">
				<form action="/online course/controller/signup.php" method="POST" onsubmit="return validateForm()">
					<div class="row mb-3">
						<div class="col text-center">
							<h2>Sign Up</h2>
						</div>
					</div>
															<div class="row">
						<div class="col-sm-9 col-md-6">
							<div class="form-group">
								<label for="firstname">First Name</label>
								<input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" required="">
							</div>
						</div>
						<div class="col-sm-9 col-md-6">
							<div class="form-group">
								<label for="lastname">Last Name</label>
								<input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" required="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email">E-Mail</label>
						<input id="email" name="email" type="email" placeholder="Valid, permanent E-Mail" class="form-control" required="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" minlength="8" placeholder="Password" class="form-control">
						<small class="text-muted">Please choose a strong password with a minimum of 8 characters.</small>
					</div>
					<div class="form-group">
						<label for="confirm">Confirm Password</label>
						<input type="password" name="confirm" id="confirm" placeholder="Password" class="form-control">
					</div>
					<div class="text-center">
						<span id="errorText" class="text-danger d-none"></span>
					</div>
					<input type="hidden" name="submit" value="Submit">
					<button class="btn btn-primary btn-block mt-4" type="submit">Register</button>
				</form>
				<hr>
				<div class="text-center">
					<small class="text-muted">Please provide a valid E-Mail ID, which will be used for correspondence with you.</small>
				</div>
		 
			</div>
		</div>
	</div>



<!------------------------------------------------SIGNUP END ------------------------------------------------->


<!--------------------------------------------- FOOTER START ------------------------------------------------>

<footer class="footer bg-dark mt-5 text-light">
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












