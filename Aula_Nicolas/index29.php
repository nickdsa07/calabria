<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		if (3==3) {
			echo "Validando condição 1 como TRUE pois 3 == 3 <br><br>";
		}

			echo "----------------------------------------------------------------------- <br><br><br>";

				if (4==3) {
					echo "Validando condição 2";
				} else {
					echo "Condição é FALSE pois é 4 == 3 <br><br>";
				}

			echo "----------------------------------------------------------------------- <br><br><br>";

							$a = 14;
							$b = 36;
							$c = 14;

							if ($a == $c) {
								echo "Validando condição 3 como TRUE pois $a == $c <br><br><br>";
							}

			echo "----------------------------------------------------------------------- <br><br><br>";

							if ($b == $a) {
								echo "Validando condição 4 <br><br><br><br>";
							} else {
								echo "Condião 4 é FALSE pois $b == $a <br><br><br>";
							}

			echo "----------------------------------------------------------------------- <br><br><br>";

								$nome1 = "Maciel";
								$nome2 = "Maciel";

								if ($nome1 == $nome2) {
										echo "Validando condição 5 como TURE pois $nome1 == $nome2 <br><br>";
								}

			echo "----------------------------------------------------------------------- <br><br><br>";
?>