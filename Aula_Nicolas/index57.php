<?php

	echo "<body style='background-color:#E0FFFF'>";
	echo "<br>";

		$i = 1;
		$limite1 = 6;
		$limite2 = 3;

		while ($i <= $limite1) {

			echo "variável i vale $i (loop externo) <br>";

				$a = 1;

				while ($a <= $limite2) {

					echo " . . . . . . . . . . . . . . . . . . variável a vale $a (loop interno) <br>";

					$a++;
				}
		$i++;
		 }

		 echo " <br> Final ";
		 
?>