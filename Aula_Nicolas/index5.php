<?php

	if (is_int(8)) {
		echo "É inteiro a 1ª validação <br><br><br>";
	} else {
		echo "Não é <br><br>";
	}


				if (is_int("casa")) {
					echo "É inteiro <br>";
				} else {
					echo "é False a 2ª validação, não é inteiro <br><br><br>";
				}



								$a = -12;

								if (is_int($a)) {
									echo "3ª validação É inteiro a variável declarada $a <br><br><br>";
								} else {
									echo "É false a validação da 3ª";
								}
?> 