<?php

    $teste = "asd";

    echo "$teste é a variável antes do if <br>";

    if(5 > 2) {

        $teste = "dsa";

        echo "$teste é a variárel no if <br>";
        
    }

    echo "$teste é a variárel depois do if <br>"; //mesmo dentro do if, a variável constinua no escopo global

    function funcao() {

        $teste = "lelelele";

        echo "$teste é a variável dentro da função <br>";

    }

    funcao();

    function testandoGlobal() {

        global $teste; //chama o valor global da variável, é uma forma de acessá-la dentro do escopo local.

        $teste = 4; //mudando o valor da variável global

        echo "$teste é a variável da função global <br>";
    }

    testandoGlobal();

    echo "$teste é a variável depois da função global <br>";