<?php

session_start();

   /* $msg_name = $_SESSION['email'];
             $msg_pwd = $_SESSION['password'];
		
		   echo "<h1> Welcome " . "<font color=red>$msg_name</font></h1>" ; 
            echo "<br><h1> Your password is " . "<font color=red>$msg_pwd</font></h1>";  
    
*/
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/style.css">

<!-- Poppins Font-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<!-- Poppins Font-->

<!-- Font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font awesome icons -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<title>Hacking Truth Academy</title>
</head>
<body>


<!--------------------------------------------- HEADER PARTS START ------------------------------------------------>

	 


<div class="header" id="top-header">
<nav class="navbar navbar-expand-lg navbar-light bg-light   fixed-top">
<div class="container  text-uppercase p-2">
 

  <a class="navbar-brand" href="#">Hacking Truth</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
  <h1 class="font-weight-bold">WELCOME TO HACKING TRUTH ACADEMY</h1>
    <p>IF U NEED A H4CKER U NEED TO THINK LIKE A H4CKER</p>
	   <div class="header-buttons">
	      <a href="#">About</a>
	      <a href="#">Walk with us</a>
	        
	   </div>
</div>


</section>

</div>

<!--------------------------------------------- HEADER PARTS END ------------------------------------------------>


<!--------------------------------------------- COURSE CARD START ------------------------------------------------>


<!--  Course card 1 Start    -->
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-sm-4">
<div class="card" style="width: 18rem; ">
  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="images/footprinting.png">
<!--  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="../images/header-images.png" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
-->
  <div class="card-body">  <!--style= "border: 1px solid #606060;"> -->
    <h5 class="card-title">Information Gathering Course</h5>
    <p class="card-text">In the Footprinting in Ethical Hacking training course, students will learn footprinting.</p>
    <a href="footprinting-course.php" class="btn btn-primary">More Details</a>
  </div>
</div>
</div>
<!-- Course card 1 End --> 



<!-- course card 2 start -->
<div class="col-sm-4  mb-5">
<div class="card" style="width: 18rem;">
  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="images/linux-course.png">
<!--  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="../images/header-images.png" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
-->
  <div class="card-body">
    <h5 class="card-title">Basic To Advance Linux Course</h5>
    <p class="card-text">In the Linux Course in Ethical Hacking training course, students will learn the basics of Linux.</p>
    <a href="#" class="btn btn-primary">Coming Soon</a>
  </div>
</div>
</div>
<!--  Courses card 2 End -->



<!-- Course card 3 start -->
<div class="col-sm-4 mb-5 ">
<div class="card" style="width: 18rem;">
  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="images/termux-course.png">
<!--  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="../images/header-images.png" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
-->
  <div class="card-body">
    <h5 class="card-title">Termux Guide To Hacking</h5>
    <p class="card-text">In the Termux Course in Ethical Hacking training course, students will learn the Guide To Hacking.</p>
    <a href="#" class="btn btn-primary">Coming Soon</a>
  </div>
</div>
</div>
<!--  Courses card 3 End -->


<!-- Courses card 4 start -->
<div class="col-sm-4 mb-5">
<div class="card" style="width: 18rem;">
  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="images/mac.png">
<!--  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="../images/header-images.png" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
-->
  <div class="card-body">
    <h5 class="card-title">All About MAC Address</h5>
    <p class="card-text">In the MAC Course in Ethical Hacking training course, students will learn the Guide All ABout MAC Address.</p>
    <a href="#" class="btn btn-primary">Coming Soon</a>
  </div>
</div>
</div>
<!-- Course card 4 End -->


<!-- Course card 5 Start --> 
<div class="col-sm-4 mb-5">
<div class="card" style="width: 18rem;">
  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="images/cryptography.png">
<!--  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="../images/header-images.png" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
-->
  <div class="card-body">
    <h5 class="card-title">Cryptography Course</h5>
    <p class="card-text">In the Cryptography Course in Ethical Hacking training course, students will learn the Basic to advance.</p>
    <a href="#" class="btn btn-primary">Coming Soon</a>
  </div>
</div>
</div>
<!-- Course card 5 End -->


<!-- Course card 6 Start -->
<div class="col-sm-4 mb-5">
<div class="card" style="width: 18rem;">
  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="images/cookies.png">
<!--  <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="../images/header-images.png" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
-->
  <div class="card-body">
    <h5 class="card-title">Theft on The Web</h5>
    <p class="card-text">In the Cookies Session Hijacking Course in Ethical Hacking training course, students will learn the Hijacking.</p>
    <a href="#" class="btn btn-primary">Coming Soon</a>
  </div>
</div>
</div>


</div>
</div>
<!-- Course card 6 End -->


<!--------------------------------------------- COURSE CARD END ------------------------------------------------>


<!--------------------------------------------- FOOTER START ------------------------------------------------>


<!--------------------------------------------- FOOTER START ------------------------------------------------>
<!--------------------------------------------- FOOTER START ------------------------------------------------>
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fa fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fa fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa-youtube white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fa fa-linkedin white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>
</footer>


<!-- <footer class="footer bg-dark mt-5 text-light">-->
<footer class="footer bg-dark text-light">
<div class="container-fluid footer" >
<div class="container p-5">
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
<!--<footer class="page-footer font-small blue"> -->
  
    <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center mb-1">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fa fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fa fa-twitter"> </i>
      </a>
    </li>
    
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fa fa-linkedin"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-youtube mx-1">
        <i class="fa fa-youtube"> </i>
      </a>
    </li>
	<li class="list-inline-item">
      <a class="btn-floating btn-instagram mx-1">
        <i class="fa fa-instagram"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->
  <div class="footer-copyright text-center py-3 ">&copy; 2019-<?php echo date("Y"); ?>
    <span> All Rights Reserved </span><a href="hackingtruth.php">HackingTruth.in</a>
  </div>
  <!-- Copyright -->
  <!--</footer> -->
</footer>
 
<!--------------------------------------------- FOOTER END ------------------------------------------------>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

</body>
</html>












