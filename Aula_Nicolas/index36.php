<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		if (7 > 3 && 10 < 21) {
			echo "TRUE 1 <br><br>";
		} else {
			echo "FALSE 1 <br><br>";
		}

			if (4 >= 8 && 9 < 12) {
				echo "TRUE 2 <br><br>";
			} else {
				echo "FALSE 2 <br><br>";
			}

				$a = 6;
				$b = 4;
				$c = 6;
				$d = 14;

				if ($a == $c && $b <= $d) {
					echo "TRUE 3 <br><br>";
				} else {
					echo "FALSE 3 <br><br>";
				}

					if ($c === $d && $d <=$a) {
						echo "TRUE 4 <br><br>";
					} else {
						echo "FALSE 4 <br><br>";
					}

						if (14 === $d && $b >= 5) {
							echo "TRUE 5 <br><br>";
						} else {
							echo "FALSE 5 <br><br>";
						}

							if (($a == $c && $b <= $d) && (7 > 3 && 10 < 21)) {
									echo "TRUE 5 <br><br>";
							} else {
									echo "FALSE 5 <br><br>";
							}
						
?>