<?php

// com funcao extract podemos criar variaveis rapidamente de arrays associativos
// o nome da chave sera o nome da variavel
// se houver uma variavel ja criada com o nome da chave, a mesma será sobrescrita

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matehus";

$pessoa = [
    'nome' => 'João',
    'idade' => 29
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$nome <br>";