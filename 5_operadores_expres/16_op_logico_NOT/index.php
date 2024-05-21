<?php

    //simbolo: !
    //inverte o simbolo booleano
    //o que é true vira false e vice e versa

    if(!(5 > 2)) { //true > false
        echo "a operação 1 é verdadeira <br>";
    }

    if(!(5 > 20)) { //false > true
        echo "a operação 2 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;

    if(!($a >= $b)) {
        echo "a operação 3 é verdadeira <br>";
    }