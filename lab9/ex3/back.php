<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	echo "<style>";
	echo "#welcome{text-align: center; font-size: 16pt; font: Times New Roman;}";
	echo "table{padding-top: 30px; margin-left: auto; margin-right: auto; text-align: center; font-size: 16pt;}";
	echo "</style>";
	$username = $_POST["username"];
  $password = $_POST["password"];
  $xbox = $_POST["invisible"];
  $sony = $_POST["gender"];
 	$switch = $_POST["iq"];
	$shipping = $_POST["shipping"];

	echo "<div id='welcome'>";
		echo "<h2><b>Welcome $username!</b></h2>";
		echo "Your password is: $password";
	echo "</div>";

	echo "<div>";
		echo "<table>";
			echo "<tr>";
				echo "<th></th>";
				echo "<th>Quantity</th>";
				echo "<th>Cost Per Item</th>";
				echo "<th>Sub Total</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Become invisible for 1 hour</th>";
				echo "<td>$invisible</td>";
				echo "<td>$500</td>";
				$value1 = 500*$invisible;
				echo "<td>$$value1</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Become a different gender for a day</th>";
				echo "<td>$gender</td>";
				echo "<td>$500</td>";
				$value2 = 1000*$gender;
				echo "<td>$$value2</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Have 400 IQ for a day</th>";
				echo "<td>$iq</td>";
				echo "<td>$300</td>";
				$value3 = 1500*$iq;
				echo "<td>$$value3</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Shipping</th>";
				echo "<td colspan='2'>$shipping</td>";
				if ($shipping == "Free 7 Day")
				{
					$value4 = 0;
				}else if ($shipping == "$50 Over Night"){
					$value4 = 50;
				}else if ($shipping == "$5 Three Day"){
					$value4 = 5;
				}
				echo "<td>$$value4</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th colspan='3'>Total Cost</th>";
				$total = $value1 + $value2 + $value3 + $value4;
				echo "<th>$$total</th>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";
?>
