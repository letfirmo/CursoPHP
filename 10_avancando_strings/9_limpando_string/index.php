<?php

    //trim -> limpa espaços antes e depois da string
    //ltim -> limpa espaços da parte inicial da string
    //rtrim -> limpa espaços da parte final da string

    //desta froma conseguimos remover os espaços desnecessarios
    //inseridos pelos usuários

    $str1 = "     Leticia      ";

    echo "Esta é a string 1: $str1. <br>";

    $str1Limpa = trim($str1);

    echo "Esta é a string 1: $str1Limpa. <br>";

    $str1Limpa2 = rtrim($str1);

    echo "Esta é a string 1: $str1Limpa2. <br>";
