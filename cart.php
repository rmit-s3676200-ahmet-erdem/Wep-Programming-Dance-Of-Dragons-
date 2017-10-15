<!-- codes were adapted from StackOverFlow and PHP Manual -->
<?php
  session_start();
  $grandTotal = 0;
  if(isset($_POST["delete"])){
  	$_SESSION['counter'] += 1;
  	$index = $_SESSION['counter'] - 1;
  	unset($_SESSION['cart'][$index]);
  }
?>
<html>
<head>
<title>Shopping Cart</title>
  <?php require_once("top-module.php"); ?>
  <style>
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color:white;
    border:1;
}
 p{
 	color:white;
 	text-align: left;
 	margin-bottom:10px;
 }
  </style>
</head>
  <?php require_once("header-nav-module.php"); ?>

<body>
	<article>
		<div class="container">
			<?php 
				foreach ($_SESSION as $value1) { //returns the array from [cart] => array()
					//echo "<form method='post'>";
					foreach ($value1 as $value2) { // returns the array from [0] =? array()
						echo "<form method='post'><table>";
						$total = 0;
						$movie = $value2['movie'];
						$day = $value2['session'];
						if($movie == "CH"){
							// $counter++;
							echo "<p><span class='movieCart'><b>Despicable Me (G),</b></span></p><span class='deleteCart'><input class='button-primary' type='submit' name='delete' value='Delete from Cart'/></span>";
						}
						else if($movie == "AC"){
							// $counter++;
							echo "<p><span class='movieCart'><b>Atomic Blonde (M),</b></span></p><span class='deleteCart'><input class='button-primary' type='submit' name='delete' value='Delete from Cart'/></span>";
						}
						else if($movie == "RC"){
							// $counter++;
							echo "<p><span class='movieCart'><b>The Big Sick (M),</b></span></p><span class='deleteCart'><input class='button-primary' type='submit' name='delete' value='Delete from Cart'/></span>";
						}
						else if($movie == "AF"){
							// $counter++;
							echo "<p><span class='movieCart'><b>Madame (M),</b></span></p><span class='deleteCart'><input class='button-primary' type='submit' name='delete' value='Delete from Cart'/></span>";
						}
						if($day == "MON-13"){
							echo "<p>Showing at Monday, 1pm</p>";
						}
						else if($day == "MON-18"){
							echo "<p>Showing at Monday, 6pm</p>";
						}
						else if($day == "MON-21"){
							echo "<p>Showing at Monday, 9pm</p>";
						}
						else if($day == "TUE-13"){
							echo "<p>Showing at Tuesday, 1pm</p>";
						}
						else if($day == "TUE-18"){
							echo "<p>Showing at Tuesday, 6pm</p>";
						}
						else if($day == "TUE-21"){
							echo "<p>Showing at Tuesday, 9pm</p>";
						}
						else if($day == "WED-13"){
							echo "<p>Showing at Wednesday, 1pm</p>";
						}
						else if($day == "WED-18"){
							echo "<p>Showing at Wednesday, 6pm</p>";
						}
						else if($day == "WED-21"){
							echo "<p>Showing at Wednesday, 9pm</p>";
						}
						else if($day == "THU-13"){
							echo "<p>Showing at Thursday, 1pm</p>";
						}
						else if($day == "THU-18"){
							echo "<p>Showing at Thursday, 1pm</p>";
						}
						else if($day == "THU-21"){
							echo "<p>Showing at Thursday, 1pm</p>";
						}
						else if($day == "FRI-13"){
							echo "<p>Showing at Friday, 1pm</p>";
						}
						else if($day == "FRI-18"){
							echo "<p>Showing at Friday, 1pm</p>";
						}
						else if($day == "FRI-21"){
							echo "<p>Showing at Friday, 1pm</p>";
						}
						else if($day == "SAT-12"){
							echo "<p>Showing at Saturday, 12pm</p>";
						}
						else if($day == "SAT-15"){
							echo "<p>Showing at Saturday, 3pm</p>";
						}
						else if($day == "SAT-18"){
							echo "<p>Showing at Saturday, 6pm</p>";
						}
						else if($day == "SAT-21"){
							echo "<p>Showing at Saturday, 9pm</p>";
						}
						else if($day == "SUN-12"){
							echo "<p>Showing at Sunday, 12pm</p>";
						}
						else if($day == "SUN-15"){
							echo "<p>Showing at Sunday, 3pm</p>";
						}
						else if($day == "SUN-18"){
							echo "<p>Showing at Sunday, 6pm</p>";
						}
						else if($day == "SUN-21"){
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
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>Standard (Concession)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>Standard (Child)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>First Class (Adult)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>First Class (Child)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>Beanbag (Adult)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>Beanbag (Family)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
								echo "<td>Beanbag (Child)</td>";
								if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
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
				echo "<table><tr><p>Grand Total: $".number_format((float)$grandTotal, 2, '.', '')."</p></tr></table></form>";
				echo "<button class='button-primary' type='button' name='checkout' value='checkout' id='book'><a href='registration.php'>CONFIRM</a></button>";
			 ?>
		</div>
	</article>
<?php require_once("footer-module.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
  </body>
</html>