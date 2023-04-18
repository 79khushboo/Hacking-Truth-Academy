<?php


  $host= 'localhost';
  $user= 'root';
  $pwd= '';
  $db= 'hackingtruth';
  $con = mysqli_connect($host, $user, $pwd, $db);
  
  if(!$con)
  {
    die("network problem");
  }
  
  $dbfound= mysqli_select_db($con, $db);
  if(!$dbfound)
  {
  die('Network Problem');
  }
  





if (isset($_POST["forgotpassword"])) {
		
		
		$email = $con->real_escape_string($_POST["email"]);
		
		$data = $con->query("SELECT id FROM register WHERE email='$email'");

		if ($data->num_rows > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
	//	$url = "http://domain.com/members/forgotpassword.php?token=$str&email=$email";

	//	 echo $url;
	////	 echo "<br>";
			
	//	mail($email, "Reset password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n");

			$con->query("UPDATE register SET token='$str', expire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'");
            
		 $con->query("UPDATE register SET token='$str' WHERE email='$email'");
			echo  $str;
			
		} else {
			echo "Your email is not exist in our database!";
		}
	}
?>