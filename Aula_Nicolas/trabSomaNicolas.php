<?php

	$int = 10;

	$float = 5.215;

	$soma = $int + $float;

	if (is_int($int)) {
		echo "O numero $int é inteiro!";
	}

	echo "<br><br>";

	if (is_float($float)) {
		echo "O numero $float é float";
	}

		echo "<br><br>";

		echo "$soma é o resultado entre a soma de $int e $float";

?>