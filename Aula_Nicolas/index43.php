<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

	echo 4 > 2 ? " 4 é maior que 2 então TRUE <br><br>" : " 3 não é maior que 2 então FALSE <br><br>";

	echo 4 == 2 ? "4 é igual a 2 então TRUE <br><br>" : " 4 não é igual a 2 então FALSE <br><br>";

	$x = 8;
	$y = 7;

	echo $y <= $x ? " 7 é menor ou igual a 8 então TRUE <br><br>" : " 7 não é menor ou igual a 8 então FALSE <br><br>";

	echo $x === $y ? " 8 é idêntico a 7 então TRUE <br><br>" : " 8 não é idêntico a 7 então FALSE <br><br>";

	echo $x >= 10 && $y == 7 ? " resultado deu TRUE" : "resultado deu FALSE";
?>