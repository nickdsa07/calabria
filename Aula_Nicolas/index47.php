<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

	$idade1 = 17;
	$idade2 = 18;
	$idade3 = 25;
	$maioridade =18;

		if ($idade1 >= $maioridade) {
			echo "É maior de idade pois tem $idade1 anos <br><br>";
		} else {
			echo "Não é maior de idade pois tem $idade1 anos <br><br>";
		}

			if ($idade2 >= $maioridade) {
				echo "É maior de idade pois tem $idade2 anos <br><br>";
			} else {
				echo "Não é maior de idade pois tem $idade2 anos <br><br>";
			}

				if ($idade3 >= $maioridade) {
				echo "É maior de idade pois tem $idade3 anos <br><br>";
			} else {
				echo "Não é maior de idade pois tem $idade3 anos <br><br>";
			}

		echo "---------------------------------------------------------------------------<br><br>";

					$num = 7;
					$nome = "Carla";

					if (is_int($num)) {
						echo "$num é um inteiro <br><br>";
					} else {
						echo "$num Não é um inteiro <br><br>";
					}

					if (is_int($nome)) {
						echo "$nome é um inteiro <br><br>";
					} else {
						echo "$nome Não é um inteiro";
					}

					if (is_string($num)) {
						echo "$num é um inteiro <br><br>";
					} else {
						echo "$num Não é um inteiro <br><br>";
					}

					if (is_string($nome)) {
						echo "$nome é um inteiro <br><br>";
					} else {
						echo "$nome Não é um inteiro";
					}
?>