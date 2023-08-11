<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = (int) "13";

		echo "$a <br><br>";

		$result = $a + 7;

		echo "$result <br><br>";

		if ($a === 13) {
			echo "É idêntico a 13 <br><br>";
		} else {
			echo "Não é idêntico a 13 <br><br>";
		}





		echo "________________________________________________________________<br><br>";

					$x = (float) "4.18965413";

					echo "$x <br><br>";

						if ($x === 4.18965413) {
							echo "É idêntico a 4.18965413 <br><br>";
						} else {
							echo "Não é idêntico a 4.18965413 <br><br>";
						}

		echo "________________________________________________________________<br><br>";

					$y = (string) 21;

					echo "$y <br><br>";

					if ($y === "21") {
						echo "É uma string";
					} else {
						echo "Não é uma string";
					}
?>