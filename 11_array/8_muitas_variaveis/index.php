<?php

    //podemos criar muitas variaveis com base em um array
    //para isso vams utilizar a funcao list
    // ex: list($nome, $idade, $profissao) = $pessoa

    $pessoa = ["Matheus", 29, "Programador", "verde"];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

    echo $nome . "<br>";
    echo $idade . "<br>";
    echo $profissao . "<br>";
    echo $corDosOlhos . "<br>";