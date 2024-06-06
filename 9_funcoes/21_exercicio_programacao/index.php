<?php

function sumDigits($num) {

    $numStr = strval($num);
    $soma = 0;

    
    for ($i = 0; $i < strlen($numStr); $i++) {
    
        $soma += intval($numStr[$i]);
    }

    return $soma;
}

