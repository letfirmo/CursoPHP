<?php

    //percorra a string $str a partir de um loop
    //imprima o número de letras "a" desta string
 
    $str = "O rato roeu a roupa do rei de Roma";

    $contadorDeA = 0;

    for($i = 0; $i < strlen($str); $i++) {
        
        if($str[$i] === "a") {
            $contadorDeA++;
        }
    }

    echo "O numero de a's na frase é de : $contadorDeA";