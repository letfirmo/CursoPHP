<?php

    //ucfirst -> primeira letra da string maiuscula
    //ucwords -> primeira letra de cada palavra maiuscula

    $frase = "testando o case de uma palavra <br>";
    $frase2 ="Testando o case de uma palavra <br>";
    $frase3 = "testando o case de uma palavra <br>";

    //primeira letra em maiusculo
    echo ucfirst($frase);
    echo ucfirst($frase2);

    //todas as palavras com as iniciais maiusculas
    echo ucwords($frase3);
    echo ucwords($frase2);