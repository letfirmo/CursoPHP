<?php

//crie um array de 10 a 20 com for;
//faça um loop em cima do arry criado dinamicamente;
//imprima apenas os números ímpares;

    $arr = [];

    for($i = 10; $i <= 20; $i++){
        array_push($arr, $i);
    }

    print_r($arr);
    echo "<br>";    

    for($x = 0; $x < count($arr); $x++){
        if($arr[$x] % 2 != 0){
            echo "Número: $arr[$x] <br>";
        }
    }
    