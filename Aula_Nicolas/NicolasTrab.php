<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 5;

		$b = 3;

		if (5 == 3) {
			echo "Condição 1 é TRUE 5 == 3 <br><br><br><br>";
		} else {
			echo "Condição 1 é FALSE pois 5 == 3 <br><br><br><br>";
		}

		if (5 != 3) {
			echo "Condição 2 é TRUE 5 != 3 <br><br><br><br>";
		} else {
			echo "Condição 2 é FALSE pois 5 != 3";
		}

		if (5 === 3) {
			echo "Condição 1 é TRUE 5 === 3 <br><br><br><br>";
		} else {
			echo "Condição 1 é FALSE pois 5 não é identico (===) a 3 <br><br><br><br>";
		}

		if (5 !== 3) {
			echo "Condição 1 é TRUE 5 !== 3 <br><br><br><br>";
		} else {
			echo "Condição 1 é FALSE pois 5 !== 3";
		}
?>