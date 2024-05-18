<?php

    function teste() {

        $a = 0;
        $a++;

        echo "$a <br>";

    }

    teste();
    teste();
    teste();

    echo "-------------- <br>";
    echo "com o escopo static ele vai adicionando +1 a cada vez que a função é chamada:  <br>";

    function testeStatic() {

        static $a = 0;
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();