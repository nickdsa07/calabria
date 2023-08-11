<?php

	if (5>2) {
		echo "O resultado é verdadeiro (true) <br><br>";
	}


	$teestando = true;

	if($teestando) {
		echo "O resultado é true no segundo teste ! <br><br>";
	}

	echo "______________________________________ <bbr><br><br>";
	echo "______________________________________ <bbr><br><br>";

	$a = true;

	if (is_bool($a)) {
		echo " a variávelé um booleano <br><br>";
	}

	if (is_bool(false)) {
		echo "a variável é um booleano";
	}
?>