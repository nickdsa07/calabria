<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 6;
		$limite = 40;

		while ($a <= $limite) {

			echo "variável a está valendo $a <br>";

				if ($a === 40) {

					echo "<br> Contador encerrando no 40 <br><br>";
				break;
				}

		$a= $a + 2;

		}


		echo "Final da repetição ";

?>