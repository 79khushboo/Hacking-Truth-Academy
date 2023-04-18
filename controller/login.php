<?php

    // check              echo $_POST['email']; 
 // check for print    echo $_POST['password']; 
 
session_start();

require_once('connectionstring.php');

  
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
 
 
 
 // PASSWORD HASHING START 
  
  
  
// $password_h = password_hash($password, PASSWORD_DEFAULT);

   
//if (!password_verify($password, $password_h)) {
 //   echo 'Invalid password.';
 //   exit;
//}

 
/* $password_h = '$2y$10$KrofiIsoUd7CD.ee6.mDxu5y7CpLLOeFnO0FFm4Y34u';

if (password_verify('asdfasdf', $password_h)) {
     echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
*/
// PASSWORD HASHING END

$query ="SELECT id, password FROM register WHERE email='$email' ";

 $result = mysqli_query($con, $query);
 
 if(mysqli_num_rows($result)>0)
  {
		$row=mysqli_fetch_array($result);
		$user=$row[0];
		$pwd= $row[1];
		if($email==$email && $password==$pwd  )
				 {
					 
	  echo "<script>location='/online course/hackingtruth.php'</script>";
   
   $_SESSION['email'] = $email;
   $_SESSION['password'] = $pwd;
//   $_SESSION['number']   = $nmbr;
				 
				 }
				 
	 
 else 
 {
	 
	 echo "<Script type=\"text/javascript\">
	 alert(\"The email or password does not match\");
	 window.location = \"/online course/login.php\"
	 
	 </script>";
	 
	 
 }

  }
  else
	  echo "<script type=\"text/javascript\">
     alert(\"The email or password does not match\");
	 window.location = \"/online course/login.php\"
	 
	 </script>";










?>