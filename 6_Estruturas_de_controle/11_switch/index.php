<?php

    //pode-se adicionar a instruçãp break para ele nao ser mais executado
    //pode-se tambem adicionar a instrução default, que é executada caso nenhuma condição seja satisfeita

    $x = 1;

    switch($x) {

        case 0: //esse case está correto, então ele vai executar todos os cases abaixo mesmo ele não estando corretos, para parar tem que colocaar o break
            echo "x é igual a 0 <br>";
            break;
        case 1: 
            echo "x é igual a 1 <br>";
            break;
        default:
            echo "X não é igual a nenhum dos valores <br>";
    }

    //pode substituir o if:

    if($x == 0) {
        //comando
    } else if($x == 1) {
        //comando
    } else if($x == 2) {
        //comando
    }

    $a = "Leticia";

    switch($a) {

        case "Leticia": //esse case está correto, então ele vai executar todos os cases abaixo mesmo ele não estando corretos, para parar tem que colocaar o break
            echo "O nome é " . $a . "<br>";
            break;
        case "Matheus": 
            echo "O nome é" . $a . "<br>";
            break;
        default:
            echo "O nome nao foi identificado <br>";
    }
    