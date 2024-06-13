<?php

// a funcao in_array varifica se um item passado por parametro esta no array
//o retorno é true se encontrar o item e false se nao encontrar
//vamos passar dois argumentos para a funcao, exemplo:
//in_array("item", $arr)

    $arr = ['banana', 'maçã', 'batata', 'pera', 'mamão'];

    if(in_array("batat", $arr)) {
        echo "há o item batata no array <br>";
    } else {
        echo "não há batata no array <br>";
    }

    $b = "banana";

    if(in_array($b, $arr)) {
        echo "há o item banana no array <br>";
    } else {
        echo "nao há banana no array <br>";
    }

    if(in_array("teste", $arr)) {
        echo "há o item teste no array <br>";
    } else {
        echo "nao há teste no array <br>";
    }
