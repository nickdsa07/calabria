<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 4;
		$b = 8;
		$c = 7;
		$d = 4;

		if ($a > $b) {
			echo "$a > $b = TRUE <br><br>";
		} else {
			echo "$b > $a = FALSE <br><br>";
		}

			if ($d >= $c) {
				echo "$d >= $c = TRUE <br><br>";
			} else {
				echo "$d >= $a = FALSE <br><br>";
			}

				if ($d >= $a) {
					echo "$d >= $a = TRUE <br><br>";
				} else {
					echo "$d >= $a = FALSE <br><br>";
				}
?>