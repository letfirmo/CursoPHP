<?php

//com a funcao array_slice podemos resgatar uma faixa de elementos de um array
//passamos 3 parametros: o array, indice inicial e quantos elemtentos queremis resgatar a partir do indice


    $arr = [2, 4, 6, 10, 12, 14, 16, 18];

    $slice1 = array_slice($arr, 1, 3);

    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arr, 4, 4);

    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arr, 4);

    print_r($slice3);
    echo "<br>";

    $slice4 = array_slice($arr, 4, -3);

    print_r($slice4);
    echo "<br>";