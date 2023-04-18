<?php


session_start();


?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/login-style.css">

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


<!---------------------------------------FOOTPRINTINF COURSE MODULES START ---------------------------------->


<div class="container">
				<div class="card mt-5">
			<h2 class="mt-3 card-title text-center">Footprinting & Reconnaissance Course</h2>
			<div class="card-body">In the Footprinting in Ethical Hacking training course, students will learn the basics of footprinting and reconnaissance, the first step in the ethical hacking methodology, and the tools that are commonly used in this information gathering task.</div>
		</div>
				<table class="table">
			<thead>
				<tr><th>Chapter</th>
				<th class="fit">Action</th>
			</tr></thead>
			<tbody>
									<tr>
						<td>Networking Basics And Information Gathering (part-1)</td>
						<td><a href="footprinting-watch-chapter1.php" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Information Gathering (part-2)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=2" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Wifi Hacking (part-1)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=3" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Wifi Hacking (part-2)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=4" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Linux Basics</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=5" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Android And System Hacking</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=6" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>VM setup</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=7" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Capture The Flag</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=8" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Google Dorks</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=9" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Information Gathering On Webserver (part-1)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=10" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Information Gathering On Webserver (part-2)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=11" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>Man In The Middle Attack</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=12" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>XSS (part-1)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=13" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>XSS (part-2)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=14" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>XSS (part-3)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=15" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>XSS (part-4)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=16" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>SQL-Injection (part-1)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=17" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>SQL-Injection (part-2)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=18" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>SQL-Injection (part-3)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=19" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>SQL-Injection (part-4)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=20" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>SQL-Injection (part-5)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=21" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
										<tr>
						<td>SQL-Injection (part-6)</td>
						<td><a href="watch-chapter.php?course_id=1&amp;chapter_id=22" class="btn btn-primary p-1 px-3">Play</a></td>
					</tr>
								</tbody>
		</table>
	</div>


<!------------------------------------FOOTPRINING COURSE MODULES END --------------------------------------->


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












