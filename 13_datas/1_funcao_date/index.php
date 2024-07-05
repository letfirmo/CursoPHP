<?php

//a funcao date recebe um parametro, que é o formato da data, e este é o primeiro parametro da mesma
//a resposta sera a data atual
//exxemplo:
//date("d/m/y"); 

$d = date('d/m/y');

echo $d . "<br>";

$d2 = date('D,M - Y');

echo $d2 . "<br>";

$d3 = date('d,M - Y');

echo $d3 . "<br>";

$d4 = date('d/m/Y');

echo $d4 . "<br>";

//qualquer coisa ir no site do php que tem o manual