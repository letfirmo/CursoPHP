<?php

    //para percorrer uma string é so usat strlen em uma estrutura de repetição
    
    $str = "Esta é uma string muito grande, ela tem vários caracteres";

    for($i = 0; $i < strlen($str); $i++){

        echo "$str[$i] <br>";
        
    }