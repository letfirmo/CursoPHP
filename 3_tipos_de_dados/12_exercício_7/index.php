<?php

    $pessoa = [
        'nome' => 'Leticia',
        'idade' => 29,
        'profissao' => 'Programadora',
        'graduação' => 'Engenharia da computação'
    ];

    $maioridade = 18;

    //desafio

    if($pessoa['idade'] >= $maioridade){
        echo "A pessoa é maior de idade!";
    }
