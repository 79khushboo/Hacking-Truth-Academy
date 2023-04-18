<?php



session_start();





?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Home</title>

</head>
<body>

<?php




$admin_print =  $_SESSION['email'];

echo "Hello " . $admin_print;



?>






</body>
</html>