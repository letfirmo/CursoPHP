<?php

    //crie um array multidimensional com 3 arrays que tem 4 elermentos cada
    //imprima todos os elemetnso de cada um dos arrays
    // imprima tambem quando esta mudando de array

    $arr = [
        [1, 2, 3, 4],
        [2, 4, 6, 8],
        [3, 6, 9, 12]
    ];

    //loop no array externo
    for($i = 0; $i < count($arr); $i++){

    //imprimindo array
    echo "imprimindo array externo: " . ($i + 1) . "<br>";

    //imprimindo o array interno
    for($j = 0; $j < count($arr[$i]); $j++) {

        echo $arr[$i][$j] . "<br>";

    }
    
}