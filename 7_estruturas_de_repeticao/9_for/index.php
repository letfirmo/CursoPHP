<?php

    $j = 0;
    $nome = "Matheus";

    //contador; condição; incremento/decremento
    for($i = 0; $i <10; $i++) {

        if($i == 4) {
            echo "$nome <br>";
        }

        if($i == 8) {
            break;
        }

        echo "Testando for $i <br>";

    }