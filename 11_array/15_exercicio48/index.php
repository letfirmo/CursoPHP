<?php

//crcie um array com os valores: batata, maçã, pera, feijão, arroz
//remoca pera e feijãp

$arr = ["batata", "maçã", "pera", "feijão", "arroz"];

array_splice($arr, 2, 2);

print_r($arr);
echo "<br>";