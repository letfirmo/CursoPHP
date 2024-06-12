<?php

    //adicionar valor ao fim de um array sem determinar um indice

    $arr = [1, 2, 3];

    $arr[] = 4;

    print_r($arr);
    echo "1 <br>";

    $arr[] = 5;

    print_r($arr);
    echo "1 <br>";

    $arr2 = [];

    $arr2[] = 1;

    print_r($arr2);
    echo "2 <br>";

    $arr3 = [];

    $arr3['teste'] = 'testando';

    print_r($arr3);
    echo "3 <br>";
