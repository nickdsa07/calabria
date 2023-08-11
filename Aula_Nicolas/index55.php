<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$x = 0;

		while ($x <= 8) {

			echo "O x vale = $x <br>";

		$x++;

		}

			echo "<br>";
			echo "Fim da reprtição <br><br>";

	echo "<br><br>...................................................................<br><br>";

			$x = 0;

			while ($x <= 8) {

				echo "O x vale = $x <br>";

					if ($x === 5) {

						echo "Encerrado o loop em 5 <br><br>";
					break;
					}

			$x++;

			}

			echo "<br>";
			echo "Fim da repetição";
?>