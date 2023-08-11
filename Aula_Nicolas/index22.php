<?php

	echo "<body style='background-color:E0FFFF'>";

		echo 4 + 6 * 5;
		echo "<br>";
		echo "____________<br><br>";

		echo (4 + 6) * 5;
		echo "<br>";
		echo "____________<br><br>";

		echo 5 + 6 * 5;
		echo "<br>";
		echo "____________<br><br>";

		echo (5 + 6) * 5;
		echo "<br>";
		echo "____________<br><br>";

		$a = 5;
		$b = 6;
		$c = 5;

		echo ($a + $b) / $c;
		echo "<br>";
		echo "_____________<br>";

		$result = $b + $b / $a;
		echo $result;
		echo "<br>";
		echo "____________<br><br>";

		$x = 4;
		$y = 6;
		$z = 2;

		$resultado = $y - $z * $x / $z;
		echo $resultado;
?>