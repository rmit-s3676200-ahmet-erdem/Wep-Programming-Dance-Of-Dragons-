<?php
  session_start();
   // include_path='C:\xampp\php\PEAR'
  //session_destroy();

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
			  	$grandTotal = 0;
			  		foreach ($_SESSION as $value1) { //returns the array from [cart] => array()
			  			//$grandTotal = 0;
			  			foreach ($value1 as $value2) { // returns the array from [0] =? array()
			  				echo "<table>";
			  				$total = 0;
			  				$movie = $value2['movie'];
			  				$day = $value2['session'];
			  				if($movie == "CH"){
			  					echo "<p><b>Despicable Me (G)</b></p>";
			  				}
			  				else if($movie == "AC"){
			  					echo "<p><b>Atomic Blonde (M)</b></p>";
			  				}
			  				else if($movie == "RC"){
			  					echo "<p><b>The Big Sick (M)</b></p>";
			  				}
			  				else if($movie == "AF"){
			  					echo "<p><b>Madame (M)</b></p>";
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
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 18.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  					if($seatType == "SP" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 10.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 15.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  					if($seatType == "SC" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 8.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 12.50;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  					if($seatType == "FA" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 25.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 30.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  					if($seatType == "FC" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 20.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 25.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  					if($seatType == "BA" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 22.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 33.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  					if($seatType == "BF" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 20.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr></tr>";
			  						}
			  						else{
			  							$cost = 30.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr></tr>";
			  						}
			  					}
			  					if($seatType == "BC" && $numberOfSeats != 0){
			  						//echo "HELLOW WORLD";
			  						echo "<td>Standard (Full)</td>";
			  						if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
			  							$cost = 20.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  						else{
			  							$cost = 30.00;
			  							$quantity = $numberOfSeats;
			  							$subtotal = $cost * $quantity;
			  							$total += $subtotal;
			  							echo "<td>$".$cost."</td>";
			  							echo "<td>".$quantity."</td>";
			  							echo "<td>$".$subtotal."</td></tr>";
			  						}
			  					}
			  				}
			  				$grandTotal += $total;
			  				echo "<tr><td>Total: </td>";
			  				echo "<td></td>";
			  				echo "<td></td>";
			  				echo "<td>$".$total."</td></tr></table>";
			  			}
			  		}
			  		echo "<table><tr><p>Grand Total: $".$grandTotal."</p></tr></table>";
			  	 ?>
		</div>
	</article>
</body>
</html>
  </main>
<?php require_once("footer-module.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
  </body>
</html>