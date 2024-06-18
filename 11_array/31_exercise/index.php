<?php

// Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.
//A função deve retornar o maior elemento presente no array.
//Considere que o array sempre terá pelo menos um elemento.
$arr = [1, 2, 3, 4];

function maiorElemento($arr){
    
    $maior = $arr[0];
    
    foreach($arr as $numero){
        if ($numero > $maior){
            $maior = $numero;
        }
    }
    
    return $maior;
}