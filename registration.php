<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();
  $counter = 0;
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
    <title>Registration</title>
    <?php require_once("top-module.php"); ?>
  </head>
   <?php require_once("header-nav-module.php"); ?>
<main>

	<div class="container">
		<form method="post" id="registration" class="form" method="post" onsubmit="return formValidate()">
			<input name="source" id="source" type="hidden" class="form-control" value="RegisterUser">
			<label for="name">Name: </label>
			<input name="name" id="name" type="text" placeholder="John" required>
			<span class='error' id='getNameError'></span>
			
			<label for="email">Email address</label>
			<input type="email" id="email" placeholder="Email" name="email" required>
			<span class='error' id='getEmailError'></span>

			<label for="phno">Phone Number </label>
			<input name="phNo" id="phNo" type="text" required>
			<span class='error' id='phNoError'></span>
			<input name="submit" id="sub" type="submit" required>
		</form>		
	</div>
</body>
</html>

	</main>
<?php require_once("footer-module.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
  <script type="text/javascript" src="formValidate.js"></script>
  </body>
</html>
