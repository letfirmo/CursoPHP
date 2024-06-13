<?php

// para ordenas em ordem crescente pelo valor das chaves, podemos utilizar a funcao arsort
//se quisermos ordenar o array pelas chaves, utilizamos o valor ksort

    $arr = [
        'Leticia' => 24,
        'Victor' => 28,
        'Simone' => 49,
        'Vilson' => 65
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [
        'Leticia' => 14,
        'Victor' => 18,
        'Simone' => 39,
        'Vilson' => 55
    ];

    asort($arr2);

    print_r($arr2);
    echo "<br>";

    ksort($arr2);

    print_r($arr2);
    echo "<br>";

    krsort($arr2);

    print_r($arr2);
    echo "<br>";