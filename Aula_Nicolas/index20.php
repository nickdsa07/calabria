<?php

	echo "<body style='background-color:#E0FFFF'>";

	function teste() {

		$a = 0;
		$a++;

		echo "$a <br>";
	}

	teste();
	teste();
	teste();

	echo "_________________<br><br>";

function tessteStatic() {

	static $a = 0;
		$a++;

		echo "$a <br><br>";
	}

	tessteStatic();
	tessteStatic();
	tessteStatic();
?>