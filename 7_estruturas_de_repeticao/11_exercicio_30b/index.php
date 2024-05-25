<?php

    //crie um array de 1 a 10
    //utilize um loop for para criar eeste array
    //dica: voce pode utilizar o metodo array_push(arr, elemento) para inserir um elemento em um array
    //imprima o array criado com print_r

    $arr = [];

    for($i = 1; $i <= 10; $i++) {

        array_push($arr, $i);

    }

    print_r($arr);