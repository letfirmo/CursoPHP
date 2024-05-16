<?php

//is_int verifica se o numero é um inteiro, se sim true, se não false

    if(is_int(4)){ //true
        echo "é um inteiro <br>";
    }

    if(is_int("um texto")){ //false
        echo "é um inteiro <br>";
    } //como deu false, não imprime nada

    $a = 10;

    if(is_int($a)){ //true
        echo "é um inteiro 3 <br>";
    }