<?php

	echo "<body style='background-color:#E0FFFF'>";

			echo 5 / 2;

			echo "<br><br>";

			if (is_float(5/2)) {
				echo "É um float";
			}

			echo "<br>";
			echo "______<br><br>";

					echo 2 . 3;

					if (is_float( 2 . 3)) {
						echo "É um float";
					}

					echo "<br><br>";

					if (is_string(2 . 3)) {
						echo "É uma string";
					}

											echo "<br><br>";
											echo "___________<br><br>";

											$nome = "José";
											$sobrenome = "Maciel";

											$NomeCompleto = $nome . " " . $sobrenome;
											echo $NomeCompleto;

											echo "<br><br>";

											$operacao = "5" * 12;

											echo $operacao . "<br><br>";

											echo gettype($operacao);

											echo "<br><br>";
											echo "________<br><br>";

											echo gettype([1,3,5]);
											echo "<br><br>";
											echo gettype(1.7);
											echo "<br><br>";
											echo gettype("Sol");
											echo "<br><br>";
?>