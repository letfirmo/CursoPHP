<?php

    //escopo global
    $x = 10;
    echo "$x global <br>";


    function teste() {

        //escopo local
        $x = 5;

        echo "$x local 1 <br>";

    }

    teste(); //chamando a função

    function testando() {

        //escopo local
        $x = 7;

        echo "$x local 2 <br>";
    }

    testando();