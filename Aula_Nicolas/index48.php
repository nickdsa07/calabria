<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 5;
		$b = 4;
		$c = 8;
		$d = 8;

			if ($a > $b) {
				echo "Entrou no primeiro if 1 <br><br>";
			

				if ($c >= $d) {
					echo "Entrou no segundo if 1 <br><br>";
				}
			}
	echo "------------------------------------------------------------------------------ <br><br>";

					if ($a > $b) {
						echo "Entrou no primeiro if 2 <br><br>";

					if ($c != $d) {
						echo "Entrou no segundo if 2 <br><br>";
					} else {
						echo "Entrou no else 2 <br><br>";
					}
				}

	echo "------------------------------------------------------------------------------ <br><br>";

					if ($a > $b) {
						echo "Entrou no primeiro if 3 <br><br>";

					if ($c != $d) {
						echo "Entrou no segundo if 3 <br><br>";
					} else {
						echo "Entrou no else 3 <br><br>";
					}
				
				}	else {
					echo "Entrou no else 3 <br><br>";
				}
?>