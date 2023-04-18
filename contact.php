<?php

session_Start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" style="text/css" href="css/contact-style.css">

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
      
      <li class="nav-item">
        <a class="nav-link" href="students.php">Students</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="offline-classes.php">Offline Classes</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
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




<section class="header-section">
<div class="center-div">
  <h1 class="font-weight-bold text-uppercase p-2">Contact us</h1>
    <p>CONTACT US WITH HACKING TRUTH</p>
	   <div class="header-buttons">
	      <a href="#" >About</a>
	      <a href="#">Walk with us</a>
	        
	   </div>
</div>

</section>

</div>


<!--------------------------------------------- HEADER PARTS END -------------------------------------------->


<!--------------------------------------------- CONTACT US START -------------------------------------------->

 <section class="contact py-lg-4 py-md-3 py-sm-3 py-3"   >
       <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
       <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
	    <h2 style="font-weight: bold; font-size: 2.5em;  text-transform: uppercase;  letter-spacing: 2px; "  >contact us</h2>
	  </div>
	  
	     <div class="agile-info-para"  >
            
         <form action="#" method="post">
         <div class="row agile-wls-contact-mid"   >
         
		 <div class="col-md-6 form-group contact-forms"  >
         <input type="text" class="form-control" placeholder="Name" required="" style="border: 1px solid #00F; background: #F1F1F1; height: 44px;"  >
		 </div>
		 
		  <div class="col-md-6 form-group contact-forms"> 
		  <input type="email" class="form-control" placeholder="Email" required=""  style="border: 1px solid #00F; background: #F1F1F1; height: 44px;">
		  </div>
		  
		  
		  <div class="col-md-6 form-group contact-forms">
	      <input type="number" class="form-control" placeholder="Phone No" required="" style="border: 1px solid #00F; background: #F1F1F1; height: 44px;">
		   </div>
		  </div>
	
	        <div class="form-group contact-forms">
			<textarea class="form-control" rows="3" placeholder="Message..." required="" style="border: 1px solid #00F; background: #F1F1F1; height: 200px;"></textarea>
            </div>
			
			<div class="mx-auto col-8 col-md-2 MF-6">
					<button type="submit" class="btn btn-primary btn-block mb-5">Submit</button>
				</div>
            </form>
            </div>
     	</section>



<!--------------------------------------------- CONTACT US END -------------------------------------------->



<!--------------------------------------------- NEWSLETTER START -------------------------------------------->

<section class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
         <div class="title text-center mb-lg-4 mb-md-3 mb-3">
            <h2 style="font-weight: bold; font-size: 2.5em;  text-transform: uppercase;  letter-spacing: 3px; "  >News Letter</h2>
         </div>
         <div class="mt-lg-4 mt-3 address_mail_footer_grids">
            <div class="news-about-us">
               <form action="#" method="post">
                  <div class=" subscribe-form ">
                     <div class="form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Enter Email" required=""   style="border: 1px solid #00F; background:#F1F1F1; height: 44px;" >
                     </div>
                     <div class="mx-auto col-8 col-md-2">
					<button type="submit" class="btn btn-primary btn-block mb-5">Subscribe</button>
				</div>
                  </div>
               </form>
              <!-- <div class="info-sub-w3 text-center mt-lg-4 mt-3" style="color: #f00;" >
                  <h5 style="font-size: 1.5em;" >Subscribe To Our News Letter For More Information.
                  </h5>
               </div>-->
            </div>
         </div>
		 </div>
      </section>
	
	
<!--------------------------------------------- NEWSLETTER START END -------------------------------------------->
	 
	
<!--------------------------------------------- MAP START -------------------------------------------->


	      <div class="map">
	         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1721.6343616589802!2d85.296393!3d23.364838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e0f46e54c0f5%3A0x380de378dc7c9809!2sRd%20Number%209B%2C%20Ganga%20Nagar%2C%20Vidya%20Nagar%2C%20Harmu%2C%20Ranchi%2C%20Jharkhand%20834001!5e1!3m2!1sen!2sin!4v1589270410912!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	       </div>
	

	
<!--------------------------------------------- MAP START END -------------------------------------------->


	
<!--------------------------------------------- ADDRESS START -------------------------------------------->


<div class="card-body" style="padding-left: 10%;">
				<div class="row mt-3">
					<div class="col-lg">
						<a class="btn-floating blue accent-1" style="padding-left: 10%;"><i class="fa fa-map-marker"></i></a>
			                          <p>H2, Second Floor, My Sweet Home,<br>
					Harmu - 834002, Ganga Nagar Rd-No 2,<br>
					Ranchi Jharkhand, INDIA</p>
					</div>
					<div class="col-lg">
						<a class="btn-floating blue accent-1" style="padding-left: 10%;"><i class="fa fa-phone"></i></a>
						<p>+91 7979974228</p>
						<p>Mon - Sat, 9:00 AM-8:00 PM</p>
					  </div>
					<div class="col-lg">
						<a class="btn-floating blue accent-1" style="padding-left: 10%;"><i class="fa fa-envelope"></i></a>
						<p>hackingtruth.contact@gmail.com</p>
						<p>hackingtruth.in@gmail.com</p>
					  </div>
					</div>
					</div>
	
<!--------------------------------------------- ADDRESS END ---------------------------------------------->


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












