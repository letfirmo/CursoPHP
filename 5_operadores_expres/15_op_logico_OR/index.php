<?php

    // simbolo: ||
    // resulta em true caso qualuqer um dos lados da operação seja verdadeiro
    //resulta em false se os dois forem false

    if(5 > 2 || 3 < 4) { //true e true
        echo "operation 1 is true <br>";
    }

    if(5 > 2 || 30 < 4) { //true e false
        echo "operation 2 is true <br>";
    }

    if(5 > 20 || 3 < 4) { //false e true
        echo "operation 3 is true <br>";
    }

    if(5 > 20 || 30 < 4) { //false e false
        echo "operation 4 is true <br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if($a > $b || $d > $c) { 
        echo "operation 5 is true <br>";
    }

    if(($a > $b || $d > $c) && $c < $d) { 
        echo "operation 6 is true <br>";
    }

    if(($a > $b && $d < $c) || $c < $d) { 
        echo "operation 7 is true <br>";
    }    