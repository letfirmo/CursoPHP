<?php

//anteriormente vimos a estrutura foreach com arrays, podemos iterar facilmente com ela
//utilizando a notação de chave => valor, temos acesso rápido também a arrays associativos
// ex: foreach($itens as $key => $value) {}

$matheus = [
    'nome' => 'Matehus',
    'idade' => 25,
    'profissao' => 'eng. civil'
];

$alexia = [
    'nome' => 'Alexia',
    'idade' => 24,
    'profissao' => 'professora'
];

foreach($matheus as $carac => $value) {

    echo "$carac => $value <br>";

}

foreach($alexia as $value) {

    echo "$value <br>";

}