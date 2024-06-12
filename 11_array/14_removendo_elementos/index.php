<?php

//podemos remover elementos de um array com a funcao array_splice
//passamos como parametro o array, indice inicial e quantos elementos queremos remover
//ex: array_splice($arr, 2, 1) => a partir do indice 2, remove 1 elemtento

    $arr = [1, 2, 3, 4, 5, 6];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "<br>";

    print_r($removidos);
    echo "<br>";

    $arr2 = [1, 2, 3, 4, 5, 6];

    $removidos2 = array_splice($arr2, 3);

    print_r($arr2);
    echo "<br>";

    print_r($removidos2);
    echo "<br>";

    $arr3 = [1, 2, 3, 4, 5, 6];

    $removidos3 = array_splice($arr3, 3);

    print_r($arr3);
    echo "<br>";

    print_r($removidos3);
    echo "<br>";

