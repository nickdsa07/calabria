<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		if (11 >= 11) {
			echo "Entrou no if certo então : True 1 <br><br>";
		}

			if (4 >= 11) {
				echo "NÃO entrou no if então : False 2 <br><br>";
			}

				if (7 >= 4 && 5 === 5) {
					echo "Entrou no if : True 3 <br><br>";
				}

					$a = 7;
					$b = 4;

					if ($b <= $a) {
						echo "Entrou no if é True 4 <br><br>";
					}

					$a = 7;
					$b = 4;
					$c = "Entrou no if também é True 5 <br><br>";

					if ($b <= $a) {
						echo $c;
					}
?>