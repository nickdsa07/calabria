<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 10;
		$nome = "Julia";
		$num = 7;
		$result = $a * $num;

		if (is_int($a)) {
			echo $result . " = resultado das variáveis " . $a . " X " . $num . "<br><br>";
		
		} if ($result >= 100) {
			echo "$result é maior ou igual a 100 <br><br>";
		
		} else {
			echo "$result não é maior que 100 <br><br>";
		}

	echo "------------------------------------------------------------------------------ <br><br>";

	if (is_int($a)) {
			echo $result . " = resultado das variáveis " . $a . " X " . $num . "<br><br>";
		
		} if ($result >= 65) {
			echo "$result é maior ou igual a 65 <br><br>";
		
		} else {
			echo "$result não é maior que 65 <br><br>";
		}

	echo "------------------------------------------------------------------------------ <br><br>";

	if (is_int($nome)) {
			echo $result . " = resultado das variáveis " . $a . " X " . $num . "<br><br>";
		
		 if ($result >= 100) {
			echo "$result é maior ou igual a 100 <br><br>";
		
		} else {
			echo "$result não é maior que 100 <br><br>";
		}
		

		} else {
			echo "$nome Não é um número, é uma string ! <br><br>";
		}
	


?>