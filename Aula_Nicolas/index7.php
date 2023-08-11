<?php

	$num = 21;

	$str = "Maciel";

	$str2 = "Juliana";

	if (is_string($str)) {
		echo "O conteído da variável é : $str <br> portanto uma string <br><br><br><br>";
	}

	if (is_string($num)) {
		echo "O conteudo da variável é $num <br><br><br><br>";
	} else {
		echo "O conteúdo da variável é $num e~não é uma string <br><br><br><br>";
	}

	if (is_string($str2)) {
		echo "O conteúdo da variável é : $str2 <br> portanto uma string <br><br>";
	}

	echo " ______________________________________________________________ <br><br><br>";

	$name = "Maria";
	$idade = 24;
	$turno = "Boa Tarde";

	echo " Meu nome é $name e tenho $idade anos de idade, $turno !! <br><br><br>";
	echo 'Meu nome é '. $name . ' e tenho ' . $idade . ' anos de idade, ' . $turno . ' !!';
?>