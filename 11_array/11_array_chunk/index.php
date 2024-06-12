<?php

//podemos dividir um array grande em diversos arrays de numeros de elementos iguais
//vamos utilizar a funcao array_chunk
//passamos o array como argumento e tambem o numero de elementos que cada array deve ter

    $arr = range(1, 10);

    print_r(array_chunk($arr, 4));
    echo "<br>";

    $arrays = array_chunk($arr, 9);

    print_r($arrays);
    echo "<br>";

    print_r($arrays[1]);
    echo "<br>";