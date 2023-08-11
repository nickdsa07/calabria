<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		if (6 > 2 || 3 <5) {
			echo "TRUE 1 <br><br>";
		} else {
			echo "FALSE 1 <br><br>";
		}

			if (7 >= 7 || 3 === 5) {
				echo "TRUE 2 <br><br>";
			} else {
				echo "FALSE 2 <br><br>";
			}

				$x = 5;
				$y = 8;
				$z = 9;
				$w = 8;

				if ($y >= $z || 1) {
					echo "TRUE 3 <br><br>";
				} else {
					echo "FALSE 3 <br><br>";
				}

					if ($y != $w || $x > 9) {
						echo "TRUE 4 <br><br>";
					} else {
						echo "FALSE 4 <br><bR>";
					}

			if (($y != $w || $x > 9) && ($y >= $z || 1) ) {
				echo "TRUE 5 <br><br>";
			} else {
				echo "FALSE 5 <br><br>";
			}
?>