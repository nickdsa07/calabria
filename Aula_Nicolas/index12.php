<?php

	class pessoa {

		function falar() {

			echo "Olá, tudo bem com você?";
		}
	}



	$jose = new pessoa ();

	$jose->nome = "José";

	echo $jose->nome;

	echo "<br><br>";

	$jose->falar();
	
?>