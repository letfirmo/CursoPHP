<?php

//com a funcao array_keys recebemos um array apenas com sa chaves de um array
//com a funcao array_values recebemos um array com apenas os valores de um array

    $carro= [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];

    $chaves = array_keys($carro);

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro);

    print_r($valores);
    echo "<br>";