<!--//< ? php


  $ host= 'localhost';
  $ user= 'root';
  $ pwd= '';
  $ db= 'hackingtruth';
  $ con = mysqli_connect($host, $user, $pwd, $db);
  
  if(!$ con)
  {
    die("network problem");
  }
  
  $ dbfound= mysqli_select_db($con, $db);
  if(!$ dbfound)
  {
  die('Network Problem');
  }
  
-->




<!--if (isse t($ _POS T["forgotpassword"])) {
		
		
		$ email = $ con - > real_escape_string($ _POST["email"]);
		
		$data = $con->query("SELECT id FROM register WHERE email='$email'");

		if ($data->num_rows > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
		//	$url = "http: //domain.com/members/forgotpassword.php?token=$str&email=$email";

	//	 echo $url;
		 echo "  < b r >";
			
			//mail($email, "Reset password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n");

			//$con->query("UPDATE users SET token='$str', expire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'");
            
			$con->query("UPDATE register SET token='$str' WHERE email='$email'");
			echo  $str;
			
		} else {
			echo "Your email is not exist in our database!";
		}
	}
? > //
-->
<?php

session_Start();
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/forgot-password-style.css">

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
      <li class="nav-item">
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


<!----------------------------------------------FORGOT-PASSWORD START ------------------------------------------------->


<div class="container mt-5">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
						<div class="card mb-5">
				<h5 class="card-header">Forgot your password?</h5>
				<div class="card-body">
					<form action="/online course/controller/forgotpassword.php" method="POST">
						<div class="form-group">
							<label for="emailInput">E-Mail:</label>
							<input type="email" id="emailInput" name="email" class="form-control" placeholder="you@example.com">
						</div>
						<div class="row">
							<div class="col-12 col-md-4 mx-auto">
								<button class="btn btn-primary btn-block" name="forgotpassword" type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<!--------------------------------------------- FORGOT-PASSWORD END ------------------------------------------------->


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












