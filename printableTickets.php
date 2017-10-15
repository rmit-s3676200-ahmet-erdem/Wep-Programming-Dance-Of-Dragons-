<!-- codes were adapted from StackOverFlow and PHP Manual -->
<?php 
session_start();
 ?>
<html>
<head>
	<title>InvoiceConfirmation</title>
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
 .order {
    display: inline-block;
    box-sizing: border-box;
    width: 40%;
    min-width: 400px;
    margin: 10px 3%;
    border: 4px white solid;
    padding: 10px;
    vertical-align: top;
}
  </style>
</head>
<?php require_once("header-nav-module.php"); ?>
<body>
<?php 
	$lastIndex = 0;
	foreach ($_SESSION as $value1) { //returns the array from [cart] => array()
		//$sessionLastIndex = count($_SESSION['cart']) - 1;
		// if($value1 == $_SESSION['cart'][$sessionLastIndex]){
		// 	break;
		// }
		// if($lastIndex == count($_SESSION['cart'])){
		// 	break;
		// }
		$userArray = end($value1);
		// print_r($userArray);
		$userName = $userArray['name'];
		$userEmail = $userArray['email'];
		$userPhone = $userArray['phNo'];
		//$sizeOfCart = count($_SESSION['cart']);
		//echo "</div>";
		foreach ($value1 as $value2) { // returns the array from [0] => array()
			$lastIndex++;
			if($lastIndex == count($_SESSION['cart'])){
				break;
			}
			echo "<div class='order'>";
			//echo "<p>".count($_SESSION['cart'])."</p>";
			//$tryMe = $userArray == $_SESSION['cart'][$sessionLastIndex] ? 'true' : 'false';
			echo "<p>".$userName."</p>";
			echo "<p>".$userEmail."</p>";
			echo "<p>".$userPhone."</p>";
			$total = 0;
			$movie = $value2['movie'];
			$day = $value2['session'];
			$movieName;
			$date;
			if($movie == "CH"){
				$movieName = "Despicable me";
			}
			else if($movie == "AC"){
				$movieName = "Atomic Blonde";
			}
			else if($movie == "RC"){
				$movieName = "The Big Sick";
			}
			else if($movie == "AF"){
				$movieName = "Madame";		
			}
			if($day == "MON-13"){
				$date = "Monday 1pm";
			}
			else if($day == "MON-18"){
				$date = "Monday 6pm";
			}
			else if($day == "MON-21"){
				$date = "Monday 9pm";
			}
			else if($day == "TUE-13"){
				$date = "Tuesday 1pm";
			}
			else if($day == "TUE-18"){
				$date = "Tuesday 6pm";
			}
			else if($day == "TUE-21"){
				$date = "Tuesday 9pm";
			}
			else if($day == "WED-13"){
				$date = "Wednesday 1pm";
			}
			else if($day == "WED-18"){
				$date = "Wednesday 6pm";
			}
			else if($day == "WED-21"){
				$date = "Wednesday 9pm";
			}
			else if($day == "THU-13"){
				$date = "Thursday 1pm";
			}
			else if($day == "THU-18"){
				$date = "Thursday 1pm";
			}
			else if($day == "THU-21"){
				$date = "Thursday 1pm";
			}
			else if($day == "FRI-13"){
				$date = "Friday 1pm";
			}
			else if($day == "FRI-18"){
				$date = "Friday 1pm";
			}
			else if($day == "FRI-21"){
				$date = "Friday 1pm";
			}
			else if($day == "SAT-12"){
				$date = "Saturday 12pm";
			}
			else if($day == "SAT-15"){
				$date = "Saturday 3pm";
			}
			else if($day == "SAT-18"){
				$date = "Saturday 6pm";
			}
			else if($day == "SAT-21"){
				$date = "Saturday 9pm";
			}
			else if($day == "SUN-12"){
				$date = "Sunday 12pm";
			}
			else if($day == "SUN-15"){
				$date = "Sunday 3pm";
			}
			else if($day == "SUN-18"){
				$date = "Sunday 6pm";
			}
			else if($day == "SUN-21"){
				$date = "Sunday 9pm";
			}
			echo "<p>Silverado Cinema</p>";
			echo "<p>Movie :".$movieName."</p>";
			echo "<p>Contact: ".$userPhone."</p>";
			echo "<p>Session Date: ".$date."</p>";
			$seat = $value2['seats']; // $seat is the array of seats
			foreach ($seat as $key => $valuex) {
				$cost;
				$quantity;
				$subtotal = 0;			  					
				$seatType = $key;
				$numberOfSeats = $valuex;
				if($seatType == "SF" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 12.50;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Standard (Full) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 18.50;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Standard (Full) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "SP" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 10.50;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Standard (Concession) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 15.50;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Standard (Concession) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "SC" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 8.50;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Standard (Child) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 12.50;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Standard (Child) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "FA" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 25.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x First Class (Adult) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 30.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x First Class (Adult) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "FC" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 20.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x First Class (Child) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 25.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x First Class (Child) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "BA" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 22.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Beanbag (Adult) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 33.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Beanbag (Adult) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "BF" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 20.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Beanbag (Family) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 30.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Beanbag (Family) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
				}
				else if($seatType == "BC" && $numberOfSeats != 0){
					if($day == "MON-13" || $day == "TUE-13" || $day == "WED-13" || $day == "THU-13" || $day == "FRI-13" || $day == "MON-18" || $day == "MON-21"){
						$cost = 20.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Beanbag (Child) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
					else{
						$cost = 30.00;
						$quantity = $numberOfSeats;
						$subtotal = $cost * $quantity;
						$total += $subtotal;
						echo "<p>".$quantity." x Beanbag (Child) $".number_format((float)$subtotal, 2, '.', '')."</p>";
					}
		    }
	    }
	    echo "<p>Total: $".number_format((float)$total, 2, '.', '')."</p></div>";

    }
  }
 ?>
<?php require_once("footer-module.php"); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>
</body>
</html>