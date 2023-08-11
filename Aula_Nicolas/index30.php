<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

	if (5 == "5") {
			echo "Condição 1 é TRUE 5 == '5' <br><br><br><br>";
		}

	if (5 === "5") {
			echo "Condição 2 <br><br>";
		} else {
			echo "Condição 2 é FALSE pois 5 não é identico (===) a '5' <br><br><br><br>";
		}

	if (5 == 5) {
		echo "Condição 3 é TRUE pois 5 == 5 <br><br><br><br>";
	}

					$x = "terra";
					$y = "terra";

					if ($x === $y) {
						echo "Condição 4 TRUE pois $x === $y <br><br><br><br>";
					}

					$x = 8;
					$y = "terra";

					if ($x === $y) {
						echo "testando condição 5 <br><br><br><br>";
					} else {
						echo "Condição 5 é FALSE pois $x === $y <br><br>;";
					}
?>