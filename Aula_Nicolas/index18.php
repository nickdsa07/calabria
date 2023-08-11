<?php

	echo "<body style='background-color:FFE0D5'>";

	$x = 9;

	echo "$x Global <br><br>";
								function teste() {
									$x = 4;
									echo "$x Local_1 <br><br>";
								}

								teste();
	echo "$x Global <br><br>";
								teste();

								function testar() {
									$x = 22;
									echo "$x Local_2 <br><br>";
								}

								testar();
								teste();
	$x = 77;
	echo "$x Global <br><br>";

?>