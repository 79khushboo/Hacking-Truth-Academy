<?php
   //    echo $_POST['email']; 
	//   echo "<br>";
   //   echo $_POST['password']; 

 session_start();
 
 require_once('connectionstring.php'); 
 
   
	   $email = trim($_POST['email']);  //Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
	   $password =trim( $_POST['password']);  //Remove backslashes (\) from the user input data (with the PHP stripslashes() function)
	
 
  $query ="SELECT email,password FROM `adminlogin` WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $query);
  
  if(mysqli_num_rows($result)>0)
  {
		$row=mysqli_fetch_array($result);
		$user=$row[0];
		$pwd= $row[1];
		if($email==$user && $password==$pwd )
				 {
				 echo "<script>location='../adminhome.php'</script>";
				   
				   $_SESSION['email'] = $email;
				   $_SESSION['password'] = $pwd;
				//   $_SESSION['number']   = $nmbr;
				 
				 }
				 else
				 {
				  
				   echo "<script type=\"text/javascript\">
							alert(\"The email or password does not match\");
							window.location = \"/online course/adminpanel/adminlogin.php\"
						</script>";
		}
  }
  else
	  echo "<script type=\"text/javascript\">
     alert(\"The email or password does not match\");
	 window.location = \"/online course/adminpanel/adminlogin.php\"
	 
	 </script>";
	   
?>