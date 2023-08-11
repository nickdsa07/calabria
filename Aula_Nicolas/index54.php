<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$dados = [1, "casa", true, 7, "Maria", false, 9, 4, "Fabio", 10, "verão", true];

		$a = count($dados);

			echo $a . "<br><br>";

			$x = 0;

			while ($x < $a) {

					if (is_string($dados[$x])) {

						echo $dados[$x] . "<br><br>";

					}

			$x++;

			}
?>