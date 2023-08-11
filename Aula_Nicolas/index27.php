<?php

	echo "<body style='background-color:#E0FFFF'>";

		echo "Vamos testar a concatenação";
		echo "<br><br>";
		echo "<br><br>";
		echo "Vamos testar" . " a " . "concatenação";
		echo "<br><br>";
		echo "<br><br>";

		$texto = "Vamos testar";
		$concat = "concatenação";

		echo $texto . " a " . $concat;
		echo "<br<br>";
		echo "<br><br>";

		$veiculo = "Ônibus";
		$velocMax = 80;
		$estado = "Porto Alegre";

		echo "O limite de velocidade em " . $estado . " para " . $veiculo . " é de " . $velocMax . " Km/h";

		echo "<br><br>";
		echo "<br><br>";

		$frase = $veiculo . " de " . $estado;
		echo $frase;
?>