<?php

    //Escreva uma função chamada encontrarPares que recebe um array de números inteiros como parâmetro.
    //A função deve retornar um novo array contendo apenas os números pares presentes no array original.

    $arr = [23, 56, 34, 23];
    
    function encontrarPares($arr) {
        
        $pares = [];
        
        foreach ($arr as $par){
            
            if($par % 2 === 0){
                
                $pares[] = $par;
            
            }
            
        }
        
        return $pares;
    }