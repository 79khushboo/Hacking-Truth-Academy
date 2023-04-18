<?php

  $host = 'localhost';
  $user = 'root';
  $pwd = '';
  $db = 'hackingtruth';
  $con = mysqli_connect($host, $user, $pwd, $db);
  
  
  if(!$con)
  {
  die("Network Failed");
  }
  $dbfound = mysqli_select_db($con, $db);
  
  if(!$dbfound)
  {
  die("Nework Problem");
  }

 
?>