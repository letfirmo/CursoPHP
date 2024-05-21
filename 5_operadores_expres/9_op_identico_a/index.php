<?php

    //avalia o tipo do valor, se os dois sao strings, inteeiros, etc.


    //igualdade
    if(5 == "5") {
        echo "5 é 5 <br>"; 
    }

    //identico
    if(3 === "3") {
        echo "3 é '3' <br>"; //um é int e o outro é string
    }

    if (3 === 3) {
        echo "3 é 3 <br>"; //os dois sao inteiros e sao iguais
    }

    if(3 === "teste") {
        echo "é igual";
    }

    $a = 4;
    $b = 4;
    $c = "4";

    if($a === $b) {
        echo "A é igual a B <br>";
    }

    if($a === $c) {
        echo "A é igual a C";
    }



