<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$x = 1;
		$limite = 10;

		while ($x <= $limite) {

				if ($x == 3 || $x === 5 || $x == 8) {

						echo " . . . pulou a execução ! <br>";

				$x++;

				continue;

				}

			echo "variável x cale $x <br>";

		$x++;

		 }

		 	echo " <br> Final 1º exemplo <br>";

	echo "____________________________________________ <br><br>";

			$m = 9;
			$limite = 1;

			while ($m >= $limite) {

						if ($m == 3 || $m == 6) {

							echo " . . . pulou a execução ! <br>";

						$m--;

						continue;

						}
				echo "variável m vale $m <br>";

			$m--;

			}

				echo "<br> Final 2º exemplo ";

?>