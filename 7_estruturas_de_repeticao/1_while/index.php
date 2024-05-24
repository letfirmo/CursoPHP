<?php

    //definição do contador
    $x = 0;

    while($x < 10) { //será executado enquanto x for menor que 10

        echo $x . "<br>";

        $x++;

    }

    echo "imprimindo so os numero impares <br>";

    $a = 10;

    while ($a > 0) {//enquanto a maior que zero
    
        if($a % 2 != 0) { //e se o resto da divisão de a por 2 é diferente de zero (ou seja, se a é impar)
            echo $a . "<br>"; //imprima a
        }
    
        $a--; // faça a - 1 e comece de novo caso a ainda seja maior que zero
    
    }