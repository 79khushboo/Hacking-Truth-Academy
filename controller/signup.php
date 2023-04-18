<?php

require_once('connectionstring.php');
session_start();
 
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $confirm = $_POST['confirm'];

     
	 
	 
	 
   if($password == $confirm )
  {

 
//---------- Password Hashing  ----------------------// 


//$password = password_hash($password, PASSWORD_BCRYPT);
//$confirm = password_hash($confirm, PASSWORD_BCRYPT);

// $confirm = password_hash($confirm, PASSWORD_DEFAULT);

//---------- Password Hashing  --------------------//


$query = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `password`, `confirm`) VALUES ('$firstname','$lastname', '$email', '$password', '$confirm')";

$run = mysqli_query($con, $query);

if ($run == TRUE ) 
    echo "<script type=\"text/javascript\">
                      alert(\"You are successfully registered. Please login\");
					  window.location=\"/online course/login.php\"
					  </script>";

//	 $mg = 'Your password is not matched';
 //   echo $mg;
 }
 
 
 
else {
	
	echo "<script type=\"text/javascript\">
	                alert(\"Error - your password don't matched\");
					window.location = \"/online course/signup.php\"
					</script>";
	
	
}
 
?>















