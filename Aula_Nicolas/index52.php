<?php

	echo "<body styly='background-color:#E0FFFF'>";
	echo "<br>";

		$a = 1;

		switch ($a) {

			case 0:
			echo "A variável a vale = 0 <br><br>";
			break;

			case 1:
			echo "A variável a vale = 1 <br><br>";
			break;

			case 2:
			echo "A variável a vale = 2 <br><br>";
			break;

			case 3:
			echo "A variável a vale = 3 <br><br>";
			break;

		default:
			echo "A variável a não é igual a nenhhm valor <br><br>";

		}

	echo ".................................................................... <br><br>";

			$nome = "Maria";
			switch ($nome) {

				case "Carlos":
				echo "O nome é Carlos <br><br>";
				break;

				case "Joana":
				echo "O nome é Joana <br><br>";
				break;

				case "MARIA":
				echo "O nome é MARIA <br><br>";
				break;

				case "Maria":
				echo "O nome é Maria <br><br>";
				break;

			default:
				echo "Nenhum nome é correspondente !";
			}
?>