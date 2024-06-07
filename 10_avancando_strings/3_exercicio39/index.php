<?php

    //crie uma função que recebe características de algum
    //objeto como argumento (carro, sofá, cafeterua), em array associativo

    //o array deve conter nome => preco;


    //retorne apenas os itens que custam mais que R$10

    //imprima o retorno

    $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCaros($arr) {

        $arrItensCaros = [];

        foreach($arr as $item => $preco) {
            
            if($preco > 10) {

                array_push($arrItensCaros, $item);

            }
        }

        return $arrItensCaros;

    }

    $novoArr = itensCaros($arr);

    print_r($novoArr);

    
