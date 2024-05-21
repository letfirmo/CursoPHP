<?php

    //retorna um booleano
    //no and temos true apenas quando as duas comparações são verdadeiras

    if(5 > 10 && 10 > 5) { //false e true = false
        echo "If 1 <br>";
    }

    if(50 > 10 && 10 > 5) { //true e true = true
        echo "If 2 <br>";
    }

    if(50 > 10 && 10 > 500) { //true e false = false
        echo "If 3 <br>";
    }

    if(50 > 100 && 10 > 500) { //false e false = false
        echo "If 4 <br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a <= $b && $c == $d) {
        echo "If 5 <br>";
    }

    if($b <= $a && $c >= $d) {
        echo "If 6 <br>";
    }

    if($b === $a && $c > $d) {
        echo "If 7 <br>";
    }

    if($b <= $a && $c >= $d) {
        echo "If 8 <br>";
    }

    if($b <= $a && $c === $d) {
        echo "If 9 <br>";
    }

    if($b < $a && $c) {
        echo "If 10 <br>";
    }