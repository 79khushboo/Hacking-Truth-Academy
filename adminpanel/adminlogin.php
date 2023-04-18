<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/adminlogin-style.css">

<!-- Poppins Font-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<!-- Poppins Font-->

<!-- Font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font awesome icons -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- PASSWORD VISIBILITY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--  PASSWORD VISIBILITY -->

<title>Hacking Truth Admin Login</title>

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
  
   <!--
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
      <li class="nav-item active">
	    <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
      </li>		
	  

    </ul>
    </div>
	-->
	 
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


<!------------------------------------------------LOGIN START ------------------------------------------------->



<div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
			<div class="card">
				<div class="card-body">
				
					<h5 class="card-title text-center">Admin Login</h5>
										<form action="controller/adminbackendlogin.php" method="POST">
						<div class="form-group">
								<label for="inputusername">Username</label>
							<input type="username" name="username" id="username" class="form-control" placeholder="username" required="" autofocus="">
						</div>
						
						
						<div class="form-group">
							<label for="inputEmail">Email address</label>
							<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" >
						</div>
						<div class="form-group">
							<label for="inputPassword">Password</label>
							<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" class="fa fa-fw fa-eye field_icon toggle-password" required=""> 
							<span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span><small>Show Password</small>

							<small><a href="forgotpassword.php" class="text-danger">Forgot password</a></small>
						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
					</form>
				<!--	<hr>
					<a class="btn btn-lg btn-success btn-block" href="signup.php">Sign Up</a>-->

				</div>
			</div>
		</div>


<!--------------------------------------- PASSWORD VISIBILITY START  ------------------------------------->

<script>
$(document).on('click', '.toggle-password', function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    
    var input = $("#inputPassword");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});


</script>


<!---------------------------------- PASSWORD VISIBILITY END ----------------------------------------------->


<!------------------------------------------------LOGIN END ------------------------------------------------->


<!--------------------------------------------- FOOTER START ------------------------------------------------>

<footer class="footer bg-dark mt-5 text-light">
<div class="container-fluid footer" >
 
<!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; 2020 All Rights Reserved 
    <a href="#">HackingTruth.in</a>
  </div>
  <!-- Copyright -->
  </div>


</footer>
 
 
<!--------------------------------------------- FOOTER END ------------------------------------------------>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

</body>
</html>












