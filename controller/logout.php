<?php
  //output buffer for redirecting header url on server
  ob_start();
  session_start();
  session_destroy();
  unset($_SESSION["login_email"]);
 
  echo "<script>location='/online course/login.php'</script>";
  exit();
?>
<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
</head>
<body >
</body>
</html>
