<?php

//estrutura de repeticao usada em um array
//para que a estrutura repita em todos os elementos da lista

    $arr = [10,20,30,40];

    foreach($arr as $elemento) {
        echo "O numero do indice atual é $elemento <br>";
        if($elemento == 20){
            echo "Opa <br>";
        }
    }