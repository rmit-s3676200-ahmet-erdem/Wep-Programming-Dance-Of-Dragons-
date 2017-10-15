<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();
  $_SESSION['cart'][]=$_POST;
  
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

			  	<?php 
			  	$grandTotal = 0;
			  	$counter = 0;
			  	//$sessionCartSize = count($_SESSION['cart']);
			  		foreach ($_SESSION as $value1) { //returns the array from [cart] => array()
			  			//$grandTotal = 0;
			  			foreach ($value1 as $value2) { // returns the array from [0] =? array()
			  				echo "<table>";
			  				$total = 0;
			  				$movie = $value2['movie'];
			  				$day = $value2['session'];
			  				if($movie == "CH"){
			  					echo "<p><span class='movieCart'><b>Despicable Me (G),</b></span></p>";
			  				}
			  				else if($movie == "AC"){
			  					echo "<p><span class='movieCart'><b>Atomic Blonde (M),</b></span></p>";
			  					}
			  				else if($movie == "RC"){
			  					echo "<p><span class='movieCart'><b>The Big Sick (M),</b></span></p>";
			  					}
			  				else if($movie == "AF"){
			  					echo "<p><span class='movieCart'><b>Madame (M),</b></span></p>";
			  					}
			  				if($day == "MON-16"){
			  					echo "<p>Showing at Monday, 1pm</p>";
			  				}
			  				else if($day == "MON-16"){
			  					echo "<p>Showing at Monday, 6pm</p>";
			  				}
			  				else if($day == "MON-16"){
			  					echo "<p>Showing at Monday, 9pm</p>";
			  				}
			  				else if($day == "TUE-17"){
			  					echo "<p>Showing at Tuesday, 1pm</p>";
			  				}
			  				else if($day == "TUE-17"){
			  					echo "<p>Showing at Tuesday, 6pm</p>";
			  				}
			  				else if($day == "TUE-17"){
			  					echo "<p>Showing at Tuesday, 9pm</p>";
			  				}
			  				else if($day == "WED-18"){
			  					echo "<p>Showing at Wednesday, 1pm</p>";
			  				}
			  				else if($day == "WED-18"){
			  					echo "<p>Showing at Wednesday, 6pm</p>";
			  				}
			  				else if($day == "WED-18"){
			  					echo "<p>Showing at Wednesday, 9pm</p>";
			  				}
			  				else if($day == "THU-19"){
			  					echo "<p>Showing at Thursday, 1pm</p>";
			  				}
			  				else if($day == "THU-19"){
			  					echo "<p>Showing at Thursday, 1pm</p>";
			  				}
			  				else if($day == "THU-19"){
			  					echo "<p>Showing at Thursday, 1pm</p>";
			  				}
			  				else if($day == "FRI-20"){
			  					echo "<p>Showing at Friday, 1pm</p>";
			  				}
			  				else if($day == "FRI-20"){
			  					echo "<p>Showing at Friday, 1pm</p>";
			  				}
			  				else if($day == "FRI-20"){
			  					echo "<p>Showing at Friday, 1pm</p>";
			  				}
			  				else if($day == "SAT-21"){
			  					echo "<p>Showing at Saturday, 12pm</p>";
			  				}
			  				else if($day == "SAT-21"){
			  					echo "<p>Showing at Saturday, 3pm</p>";
			  				}
			  				else if($day == "SAT-21"){
			  					echo "<p>Showing at Saturday, 6pm</p>";
			  				}
			  				else if($day == "SAT-21"){
			  					echo "<p>Showing at Saturday, 9pm</p>";
			  				}
			  				else if($day == "SUN-22"){
			  					echo "<p>Showing at Sunday, 12pm</p>";
			  				}
			  				else if($day == "SUN-22"){
			  					echo "<p>Showing at Sunday, 3pm</p>";
			  				}
			  				else if($day == "SUN-22"){
			  					echo "<p>Showing at Sunday, 6pm</p>";
			  				}
			  				else if($day == "SUN-22"){
			  					echo "<p>Showing at Sunday, 9pm</p>";
			  				}
			  				echo "<tr><th>Ticket Type</th><th>Cost</th><th>Qty</th><th>Subtotal</th></tr>";
			  				$seat = $value2['seats']; // $seat is the array of seats
			  				$total = 0;
			  				foreach ($seat as $key => $valuex) {
			  					$cost;
			  					$quantity;
			  					$subtotal = 0;			  					
			  					$seatType = $key;
			  					$numberOfSeats = $valuex;
			  					if($seatType == "SF" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<tr><td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 12.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 18.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  					if($seatType == "SP" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 10.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 15.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  					if($seatType == "SC" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 8.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 12.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  					if($seatType == "FA" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 25.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 30.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  					if($seatType == "FC" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 20.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 25.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  					if($seatType == "BA" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 22.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 33.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  					if($seatType == "BF" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 20.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr></tr>";
			  						}
			  						else{
			  							$cost = 30.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr></tr>";
			  						}
			  					}
			  					if($seatType == "BC" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-16" || $day == "TUE-17" || $day == "WED-18" || $day == "THU-19" || $day == "FRI-20" || $day == "MON-16" || $day == "MON-16"){
			  							$cost = 20.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  						else{
			  							$cost = 30.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".number_format((float)$cost, 2, '.', '')."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".number_format((float)$subtotal, 2, '.', '')."</td></tr>";
			  						}
			  					}
			  				}
			  				$grandTotal += $total;
			  				echo "<tr><td>Total: </td>";
			  				echo "<td></td>";
			  				echo "<td></td>";
			  				echo "<td>$".number_format((float)$total, 2, '.', '')."</td></tr></table>";
			  			}
			  		}
			  		echo "<table><tr><p>Grand Total: $".number_format((float)$grandTotal, 2, '.', '')."</p></tr></table>";
			  	 ?>

</div>

	<div class="container">
		<form method="post" id="registration" class="form" method="post" onsubmit="formValidate();">
			<input name="source" id="source" type="hidden" value="RegisterUser">
			<label for="name">Name: </label>
			<input name="name" id="name" type="text" placeholder="John" required>
			<span class='error' id='getNameError'></span>
			
			<label for="email">Email address</label>
			<input type="email" id="email" placeholder="Email" name="email" required>
			<span class='error' id='getEmailError'></span>

			<label for="phno">Phone Number </label>
			<input name="phNo" id="phNo" type="text" required>
			<span class='error' id='phNoError'></span>
			<input class="button button-primary" name="submit" id="sub" type="submit" required>

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
