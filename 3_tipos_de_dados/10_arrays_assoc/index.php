<?php

    $arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'Marrom'];

    echo $arr['nome']; //Sjark
    echo "<br>";
    print_r($arr); // Array ( [nome] => Shark [patas] => 4 [cor] => Marrom )
    echo "<br>";
    echo $arr['patas']; // 4

    $arrAssoc = ['chave' => 'valor', 'bool' => true];

    echo "<br>";
    print_r($arrAssoc); //Array ( [chave] => valor [bool] => 1 )