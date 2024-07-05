<?php

//funcao mktime recebe em seus parametros: hora, minuto, segundo, mes, dia e ano
//assim podemos criar uma data a partir desta informacao
//$date = mktime(01,18,00,03,12,2000);

$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);

$dataFuturaFormatura = date('m/d/y', $dataEspecifica);

echo $dataFuturaFormatura . "<br>";