<?php

//crie um array com os seguintes valores: jaguar, 3.0, azul, 18, teto solar, automatico;
// chame este array de carro
//crie variaveis com base nesse array

$carro = ["jaguar", 3.0, "azul", 18, "teto solar", "automatico"];

list($modelo, $cc, $cor, $ano, $acessorio, $tipo) = $carro;

echo $modelo . "<br>";
echo $cc . "<br>";
echo $cor . "<br>";
echo $ano . "<br>";
echo $acessorio . "<br>";
echo $tipo . "<br>";

print_r($carro);