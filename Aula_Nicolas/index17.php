<?php

	echo "<body style='background-color:skyblue'>";

	$x = 4;

	$y =& $x;

	echo $x;
	echo "<br><br>";
	echo $y;

	echo "<br><br>";

	echo "Atribuição após mudar para 9 o valor da referência <br><br>";

	$y = 9;

	echo $x;
	echo "<br><br>";
	echo $y;
	echo "<br><br>";

	echo "_______________________<br><br>";

	$nome = "Maria";

	$sobreNome =& $nome;

	echo $nome;
	echo "<br><br>";
	echo $sobreNome

?>