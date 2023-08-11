<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 9;
		$b = 4;
		$nome1 = "Maria";
		$nome2 = "Carlos";
		$e = 24;
		$f = 10;

			if ($a > $b) {
				echo "TRUE 1 <br><br>";
			}

			if ($nome1 != $nome2) {
				echo "TRUE 2 <br><br>";
			}

			if ($e <= $f) {
				echo "TRUE 3 <br><br>";
			}

			echo "_____________________________<br><br>";

				$idade1 = 14;
				$idade2 = 18;
				$idade3 = 21;
				$maior = 18;

				if ($idade1 >= $maior) {
					echo "$idade1 é menor de idade <br><br>";
				}

				if ($idade2 >= $maior) {
					echo "$idade2 é maior de idade <br><br>";
				}

				if ($idade3 >= $maior) {
					echo "$idade3 é maior de idade <br><br>";
				}
?>