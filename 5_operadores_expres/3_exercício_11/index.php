<?php

    $operacao = "5" * 12;

    echo $operacao . "<br>";

    echo gettype($operacao); //de string foi p int
    echo "<br>";

    echo gettype([]);
    echo "<br>";

    echo gettype(12.5);
    echo "<br>";

    echo gettype("teste");
    echo "<br>";