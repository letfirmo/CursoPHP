<?php

//crie variaveis com caracteristica de algum objeto ou animal
//depois crie um array com compact estas mesmas variaveis
//faça um loop no array e imprima os valores

$raca = "Vira lata";
$nome = "Turca";
$idade = 3;
$cor = "Preta";

$turca = compact("raca", "nome", "idade", "cor");

print_r($turca);
echo "<br>";

foreach($turca as $caracteristica => $value){

    echo "$caracteristica: $value <br>";

}