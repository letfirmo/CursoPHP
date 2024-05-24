<?php

    $a = 23;
    $b = "Leticia";

    if(is_numeric($a)) {
        $c = $a*2;

        if($c > 100){
            echo "C é maior que 100 <br>";
        } else {
            echo "C não é maior que 100 <br>";
        }
    }else {
        echo "não é um numero <br>";
    }