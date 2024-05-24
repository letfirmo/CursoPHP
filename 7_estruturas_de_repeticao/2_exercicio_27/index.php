<?php

    $lista = ["Leticia", 23, "Leonina", false, 1.63, true, "Araci", 2000, "Victor", 2021];

    $x = count($lista);
    $y = 0;

    while($y < $x) {

        if(is_string($lista[$y])) {
            echo $lista[$y] . "<br>";
        }

        $y++;

    }