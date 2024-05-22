<?php

    $string = "Leticia";
    $int = 23;
    $float = 23.7;
    $bool = true;

    if(is_int($string)){
        echo $string . " é um dado inteiro <br>";
    } else {
        echo $string . " não é um dado inteiro <br>";
    }
    
    if(is_int($int)){
        echo $int . " é um dado inteiro <br>";
    } else {
        echo $int . " não é um dado inteiro <br>";
    }

    if(is_int($float)){
        echo $float . " é um dado inteiro <br>";
    } else {
        echo $float . " não é um dado inteiro <br>";
    }

    
    if(is_int($bool)){
        echo $bool . " é um dado inteiro <br>";
    } else {
        echo $bool . " não é um dado inteiro <br>";
    }