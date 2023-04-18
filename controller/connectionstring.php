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
  


?>