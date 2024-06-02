<?php

    $a = 10;
    $b = 15;

    function testeEscopo() {
        $a = 5;
        global $b;
        $a++;
        
        echo "Escopo local de a: $a <br>";

        echo "Escopo global na função de b: $b <br>";

    }

    echo "Escopo global de a: $a <br>";
    echo "Escopo global de b: $b <br>";

    testeEscopo();