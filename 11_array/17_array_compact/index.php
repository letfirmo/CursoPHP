<?php

//com a funcao compact podemos criar um array a partir de variaveis
//passamos para a funcao o nome das variaveis em string
//e entao um novo array é criado, podemos atribuir a uma variavel

    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $portas = 4;

    $carro = compact("marca", "motor", "tetoSolar", "portas");

    print_r($carro);