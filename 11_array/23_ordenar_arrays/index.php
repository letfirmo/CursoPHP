<?php

//para ordenas em ordem crescente podemmos utilizar a funcao sort em um array
//para ordenas de forma inversa utilizamos rsort

$arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

sort($arr);

print_r($arr);
echo "<br>";

$arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 4];

rsort($arr2);

print_r($arr2);
echo "<br>";

$nomes = ["Maria", "Aaron", "João", "José", "Matheus"];

sort($nomes);

print_r($nomes);
echo "<br>";