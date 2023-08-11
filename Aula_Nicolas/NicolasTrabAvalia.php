<?php

    echo "<br>";

    $limite = 40;
    $veloci = 90;


        if ($veloci > $limite) {

        echo "Você levou uma multa. <br> <br>";
        echo "O limite da rodovia é de : " . $limite . "km. <br> <br>";
        echo "Seu veículo trafegou a velocidade maxima de : " . $veloci . "km. <br> <br>";

       } else if ($veloci <= $limite) { 

        echo "Você não levou uma multa. <br> <br>";
        echo "O limite da rodovia é de : " . $limite . "km. <br> <br>";
        echo "Seu veículo trafegou a velocidade maxima de : " . $veloci . "km. <br> <br>";


        } else {     
        echo "Seu carro não passou nessa rodovia";
    	echo "O limite da rodovia é de : " . $limite . "km. <br> <br>";
        }
?>