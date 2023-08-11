<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		if (5 > 3) {
			echo "Entrou no 1° if <br><br>";
		
		} else if (6 > 2) {
			echo "Entrou no else if 1 <br><br>";
		}

		echo "------------------------------------------------------------------------------ <br><br>";

				if (5 < 3) {
				echo "Entrou no 1° if <br><br>";
			
			} else if (6 > 2) {
				echo "Entrou no else if 2 <br><br>";
			}

		echo "------------------------------------------------------------------------------ <br><br>";

		if (5 < 3) {
			echo "Entrou no 1° if <br><br>";
		
		} else if (6 < 2) {
			echo "Entrou no else if 3 <br><br>";
		} else {
			echo "if e else com expressões inválidas <br>";
			echo "Portanto entrou no else final <br><br>";
		}

		echo "------------------------------------------------------------------------------ <br><br>";

				if (5 < 3) {
			echo "Entrou no 1° if <br><br>";
		
		} else if (6 < 2) {
			echo "Entrou no enlse if 3 <br><br>";
		} else if (8 == 8) {
			echo "Teste de condição com expressões do else final <br>";

		} else {
			echo "if e else com expressões inválidas <br>";
			echo "Portanto entrou no else final <br><br>";
		}

	echo "------------------------------------------------------------------------------ <br><br>";

						$a = 5;
						$b = 9;
						$msg = "Entrou no 3° else if";

						if ($b < $a) {
							echo "Entrou no 1° if <br><br>";

						} else if ($b === $a) {
							echo "Entrou no 1° else if <br><br>";

						} else if ($a == $b) {
							echo "Entrou no 2° else if <br><br>";

						} else if ($b > $a) {
							echo $msg;

						} else {
							echo "Nenhuma das condições anteriores";
						}
?>