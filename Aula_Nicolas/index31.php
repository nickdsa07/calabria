<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

	$a = 4;
	$b = 6;

	if ($a != $b) {
		echo "Testando condição 1 se $a é diferente de $b = TRUE<br><br><br><br>";
	}

	if ($a != 9) {
		echo "Testando condição 2 se $a é diferente 9 = TRUE <br><br><br><br>";
	}

	if ($b != 6) {
		echo "Testando condição 3 <br><br>";
	} else {
		echo "Testando condição 3 é FALSE pois $b não é diferente de 6 <br><br><br><br>";
	}

	if (false != "Cidade") {
		echo "Testando condição 4 se false é diferente de Cidade = TRUE <br><br>";
	} else {
		echo "condição 4 é FALSE";
	}
?>