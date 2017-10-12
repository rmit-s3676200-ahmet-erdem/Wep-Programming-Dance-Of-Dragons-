<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();

  if (isset($_POST["append"])) {
    $_SESSION['cart'][]=$_POST;
  } 
  else if (isset($_POST["checkout"])){
    $_SESSION['cart'][]=$_POST;
    header('Location: cart.php');
  }
  //unset ($_SESSION['cart']);
  // session_unset();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<H1>Thank you!</H1>
</body>
</html>